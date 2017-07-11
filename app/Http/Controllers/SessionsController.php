<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function create(){

    	return view('/welcome');

    }

    public function destroy(){

    	auth()->logout();
    	return view('/welcome');

    }

    public function store(){

        $this->validate(request(), [
            'email'  => 'required|email',
            'password'  => 'required'
        ]);
    	if(!auth()->attempt(request(['email','password']))){
    		redirect()-> back() -> withErrors(['message'=>'Invalid Credentials!']);
    	}

        return redirect()->home();

    }

}
