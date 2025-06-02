<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        \request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', \request('email'))->first();

        if (! $user || ! Hash::check(\request('password'), $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken('token_base_name')->plainTextToken;
    }
    public function picture(Request $request)
    {
        $id =Auth::User()->id;
        if ($request->hasFile('picture')) {
            $pic = $request->file('picture');
            if ($pic->isValid()

            ) {

                $picname = $id . '.' . $pic->getClientOriginalExtension();
                $pic->move(public_path('upload/image/profile'), $picname);
                $rows['picture'] = $picname;

            }
            return redirect('profile.profile');
        }
    }
}
