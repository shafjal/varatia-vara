<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterRequest;

class RegisterRequestController extends Controller
{
    public function index(){
        return view('auth.registerRequest');
    }
    public function store(Request $request)    {
            $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
    ]);

        RegisterRequest::insert([
            'name' => $request->name,
            'email' => $request->email,
            
        ]);
        return redirect('/register/request');
    }

     public function ShowReq(){
        $register_requests = RegisterRequest::all();
        return view('page.registerCreate',compact('register_requests'));
     }
}
