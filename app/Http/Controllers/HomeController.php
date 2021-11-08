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
        $currentDate = Carbon::now()->timezone('Asia/Dhaka')->format('d/m/Y');
        $currentYear = Carbon::now()->timezone('Asia/Dhaka')->format('Y');
        $curentDay = Carbon::createFromFormat('d/m/Y',$currentDate)->format('l');
        $curentMonth = Carbon::createFromFormat('d/m/Y',$currentDate)->format('F');
    
        return view('page.dashboard', compact('admin','curentDay','currentDate','curentMonth','currentYear'));
       
    }

    public function profile()
    {
        $admin = User::all();
        return view('auth.profile', compact('admin'));
    }
}
