<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class RegisterRequestController extends Controller
{

    public function store(Request $request)    {
            $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
    ]);

        RegisterRequest::insert([
            'name' => $request->name,
            'email' => $request->email,
            
        ]);
        
        if (Auth::check()) {
           return redirect('/register/request/show');
        } else {
           return redirect('/register/request');
        }
        
        
    }

     public function ShowReq(){
        $register_requests = RegisterRequest::all();
        $count = RegisterRequest::count();
        return view('page.registerCreate',compact('register_requests','count'));
     }
    public function apporve($id)
    {
        $register_request = RegisterRequest::find($id);
        $register_request->delete();
        return redirect('/register/request/show')->with('success-approve', 'Request Has been Approved!');
    }
    public function destroy($id)
    {
        $register_request = RegisterRequest::find($id);
        $register_request->delete();
        return redirect('/register/request/show')->with('success-delete', 'Request Has been Deleted!');
    }
}
