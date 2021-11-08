<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = User::all();
        $currentDate = Carbon::now()->format('d/m/y');
        $curentDay = Carbon::createFromFormat('d/m/Y',$currentDate)->format('l');
        
        return view('page.dashboard', compact('admin','curentDay','currentDate'));
       
    }

    public function profile()
    {
        $admin = User::all();
        return view('auth.profile', compact('admin'));
    }
}
