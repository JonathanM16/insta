<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
        // dd($request);
        // Ataques 
        // dd($request->get('username'));

        // validacion
// MVC
        $this->validate($request, [
            'name' => 'required | max:20',
            'username' => 'required | unique:users | min:3 | max:20 ', 
            'email' => 'required | unique:users | email | max:60 ', 
            'password' => 'required '
        ]);



    }



}
