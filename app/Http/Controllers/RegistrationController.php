<?php

namespace App\Http\Controllers;

use App\Mail\welcome;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{

    public function create(){
        return view('sessions.create');

    }

    public function store(Request $request){

        $this->validate(request(),[

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $name = $request->get("name");
        $email = $request->get("email");
        $password = bcrypt($request->get('password'));
        $user = User::create(['name'=>$name, 'email'=>$email,'password'=>$password]);


        auth()->login($user);

        \Mail::to($user)->send(new welcome($user));


        session()->flash('message','Thanks so much for registering!');

        return redirect()->home();

    }

}
