<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Auth;

class RegistrationController extends Controller{
    
    public function create(){
        return view('registration.create');
    }

    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]));

        // Auth::login();
        // Request::input();
        // request()->input;
        auth()->login($user);

        return redirect()->home();
    }

}
