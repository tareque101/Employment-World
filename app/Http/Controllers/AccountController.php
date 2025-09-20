<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    //user registration pages
    public function registration()
    {
        return view('front.account.registration');
    }

    //  this method will validate registratoin form and store user data
    // form should be validate in controller

    public function processRegistration(Request $request)
    {
    $validator =  Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|same:confirm_password',
            'confirm_password' => 'required|min:5',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }else{
            // store user data
        }
    }   

    public function login()
    {
        
    }
}
