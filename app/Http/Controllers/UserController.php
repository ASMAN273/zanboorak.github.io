<?php

namespace App\Http\Controllers;

use App\Models\Bee;
use App\Models\Desc;
use App\Models\Mainpage;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if(Auth::user()->rols == "admin"){

        $user= User::all();
        $nuser= User::all()->count();
        $desc=Desc::all()->count();
        $bee=Bee::all()->count();
        $mainpage=Mainpage::all()->count();
        return view('profile.index',['User'=>$user,'desc'=>$desc,'bee'=>$bee,'nuser'=>$nuser,'mainpage'=>$mainpage]);
        }else{
            echo  " دسترسی به این صفحه ویژه مدیران سایت می باشد ";
        }
    }

    public function create()
    {
        return view('profile.index');
    }

    public function store(Request $request)
    {

        return redirect('profile.index');

    }

    public function show($id)
    {
        $info = User::find($id);
        return view('profile.info_profile',['info'=>$info]);
    }

    public function edit($id)
    {
        $rows =User::find($id);
        return view('profile.edit_profile',['row'=>$rows]);
    }

    public function update(Request $request, $id)
    {
        $row = $request->all();

        $up = User::find($id);

        if ($request->hasFile('picture')) {
            $pic = $request->file('picture');
            if ($pic->isValid()) {
                $picname = $id . '.' . $pic->getClientOriginalExtension();
                $pic->move(public_path('upload/image/profile'), $picname);
                $row['picture'] = $picname;
            }
        }
        $up->update($row);

        return redirect('profile');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('profile.index');
    }
}
