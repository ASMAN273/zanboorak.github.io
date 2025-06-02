<?php

namespace App\Http\Controllers;

use App\Models\bee;
use App\Models\beehive;
use Illuminate\Http\Request;
use Validator;

;

class beehiveController extends Controller
{

    protected $vali = [
        'beehive_name' => 'required|string',
        'beehive_location' => 'required|string',
        'beehive_licence' => 'required|string',


    ];
    protected $messages = [
        'beehive_name.string' => 'نام زنبورستان باید متنی باشد',
        'beehive_name.required' => 'نام زنبورستان اجباریست',
        'beehive_location.string' => 'محل فعلی زنبورستان درج شود ',
        'beehive_location.required' => 'محل فعلی زنبورستان اجباریست ',
        'beehive_licence.string'=>'شماره مجوز باید عدد باشد ',
        'beehive_licence.required' => 'وارد کردن شماره مجوز زنبورستان اجباریست',
        ''

        ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hive = beehive::all();
        return view('beehive.addbeehive',['hive'=>$hive]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hive = beehive::all();
        return view('beehive.addbeehive',['hive'=>$hive]);
    }

    public function showbeehive(Request $request){


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $req = $request->all();
        $validator = Validator::make($req, $this->vali, $this->messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        beehive::create($req);
        return redirect('beehive/addbeehive')->with('sucsses',true);
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
        beehive::destroy($id);
        return redirect('beehive/addbeehive')->with('sucssesdelete',true);
    }
}
