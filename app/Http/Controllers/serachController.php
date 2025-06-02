<?php

namespace App\Http\Controllers;

use App\Models\bee;

use App\Models\beehive;
use Illuminate\Http\Request;

class serachController extends Controller
{
    public function store(Request $request)
    {

        $search = $request->get('searc');
        if ($search != ''){
            $rows = Bee::where('id_mother','LIKE',"%$search%")->paginate(5);
            $hi =Bee::all('id_beehive');
            $hive=beehive::find($hi);

        } else{
            return redirect('main');
        }
        return view('kandoo.main', ['rows' => $rows,'hive'=>$hive]);
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
