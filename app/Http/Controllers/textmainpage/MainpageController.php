<?php

namespace App\Http\Controllers\textmainpage;

use App\Models\Groupsmain;
use App\Models\Mainpage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = Mainpage::orderby('id','DESC')->paginate(5);
        $id=Mainpage::all('groups_id');
        $group = Groupsmain::find($id);


        return view('profile.addtextmainpage.mainpage', ['data' => $data,'group'=>$group]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $row = Groupsmain::all();
        return view('profile.addtextmainpage.addmainpage',['row'=>$row]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rows = $request->all();
        $id = Mainpage::create($rows)->id;
        $row = Mainpage::find($id);
        if ($request->hasFile('picture')) {
            $pic = $request->file('picture');
            if ($pic->isValid()

            ) {

                $picname = $id . '.' . $pic->getClientOriginalExtension();
                $pic->move(public_path('upload/image/mainpage'), $picname);
                $rows['picture'] = $picname;

            }

        }
        $row->update($rows);

        return redirect('profile/addtextmainpage')->with("sucsses",true);;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rows = Mainpage::where('id',$id)->get();
        $gr= Mainpage::find($id)->groups_id;
        $group = Groupsmain::find($gr)->groups;

        return view('textmain.textmain', ['rows' => $rows,'group'=>$group]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matn = Mainpage::find($id);
        $group = Groupsmain::all();
        return view('profile.addtextmainpage.editepage',['matn'=>$matn,'group'=>$group]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = $request->all();
        $up = Mainpage::find($id);

        if ($request->hasFile('picture')) {
            $pic = $request->file('picture');
            if ($pic->isValid()) {
                $picname = $id . '.' . $pic->getClientOriginalExtension();
                $pic->move(public_path('upload/image/mainpage/'), $picname);
                $row['picture'] = $picname;
            }
        }
        $up->update($row);

        return redirect('profile/addtextmainpage')->with("succesedit",true);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mainpage::destroy($id);
        return redirect('profile/addtextmainpage')->with('sucssesdelete',true);

    }
}
