<?php

namespace App\Http\Controllers;

use App\Models\Tabligh;
use Illuminate\Http\Request;

class tablighController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        $tabligh = Tabligh::paginate(4);
        return view('profile.tabligh.showtabligh',['tabligh'=>$tabligh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.tabligh.tabligh');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $rows = $request->all();
      $id =  Tabligh::create($rows)->id;
        $row = Tabligh::find($id);
        if ($request->hasFile('picture')) {
            $pic = $request->file('picture');
            if ($pic->isValid()

            ) {

                $picname = $id. '.' . $pic->getClientOriginalExtension();
                $pic->move(public_path('upload/image/tabligh'), $picname);
                $rows['picture'] = $picname;

            }

        }
       $row->update($rows);
        return redirect('profile/tabligh')->with("sucsses",true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabligh::destroy($id);
        return redirect('profile/tabligh')->with('sucssesdelete',true);
    }
}
