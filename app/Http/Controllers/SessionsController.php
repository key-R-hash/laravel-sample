<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{

    public function __construct()
    {

        $this->middleware('guest', ['except' => 'destroy']);

    }

    public function create(){

        return view('sessions.login');

    }

    /**
     * @param array $middleware
     */
    public function store(){

        $email = request('email');
        $password = request('password');

        if(!Auth::attempt(['email' => $email, 'password' => $password])){

            return back()->withErrors([

                'message' => 'Please check your credentials and try again.'

                ]);
        }

        session()->flash('message','Thanks so much for singing up!');

            return redirect()->home();




    }

    public function destroy(){

        auth()->logout();

        return redirect()->home();
    }
}
