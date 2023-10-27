<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Users;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => "required|min:5|max:12"
        ]);

        $user = users::where('email', '=', $request->email)->first();

        if ($user) {

            if (Hash::check($request->password, $user->password)) {
                $request->Session()->put('loginId', $user->id);
                return view('admin/panel');
            } else {
                return back()->with('failure', 'Wrong Password inputed');
            }
        } else {
            return back()->with('failure', 'This email is not Registered');
        }
    }
    public function signup(Request $request)
    {

        $request->validate([
            'username' => "required",
            'email' => "required|email|unique:users",
            'password' => "required|min:5|max:12"
        ]);

        $user = new users();

        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res =   $user->save();

        if ($res) {
            return back()->with('success', 'You have registered Succesfully');
        } else {
            return back()->with('failure', 'Something went wrong');
        }
    }
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
        }
        return redirect('/');
    }
}
