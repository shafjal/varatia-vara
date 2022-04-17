<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Illuminate\Foundation\Auth\User;
use Carbon\Carbon;

class TenantUserContorller extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
    {
        $admin = User::all();
        $currentDate = Carbon::now()->timezone('Asia/Dhaka')->format('d/m/Y');
        $currentYear = Carbon::now()->timezone('Asia/Dhaka')->format('Y');
        $curentDay = Carbon::createFromFormat('d/m/Y',$currentDate)->format('l');
        $curentMonth = Carbon::createFromFormat('d/m/Y',$currentDate)->format('F');
    
        return view('tenantUser.tenantDashboard', compact('admin','curentDay','currentDate','curentMonth','currentYear'));
       
    }
}
