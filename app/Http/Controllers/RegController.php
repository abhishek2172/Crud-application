<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;


class RegController extends Controller
{
    //
    function add(Request $req)
    {
        $resgistration = new Registration();
        $resgistration->name = $req->name;
        $resgistration->email = $req->email;
        $resgistration->password = $req->password;
        $resgistration->gender = $req->gender;
        $resgistration->save();
        return view('registration.login');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Registration::where('email', $req->email)->first();
        if ($user) {


            if ($user->password == $req->password) {

                return view('registration.dashboard');
            } else {
                return back()->with('fail', 'Password does not match');
            }

        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }
}
