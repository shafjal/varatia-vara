<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Miscellaneous;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Apartment;
use App\Http\Controllers\HomeController;

class MiscellaneousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
            Miscellaneous::insert([
                'created_at' => Carbon::now(),
                'apartment_id' => $request->apartment_id,
                'user_id' =>  Auth::user()->id,
                'task_name' => $request->task_name,
                'will_amount' => $request->will_amount,
                'apartment_floor' => $request->apartment_floor,
            ]);
            // $admin = User::all();
            // $currentDate = Carbon::now()->timezone('Asia/Dhaka')->format('d/m/Y');
            // $currentYear = Carbon::now()->timezone('Asia/Dhaka')->format('Y');
            // $curentDay = Carbon::createFromFormat('d/m/Y',$currentDate)->format('l');
            // $curentMonth = Carbon::createFromFormat('d/m/Y',$currentDate)->format('F');
            // $apartment_all = Apartment::all();
            // $miscellaneous_all = Miscellaneous::all();
            // $currentAppt = Apartment::find($id);
                
            // return view('page.dashboard', compact('admin','curentDay',
            // 'currentDate','curentMonth','currentYear','apartment_all','currentAppt','miscellaneous_all'));
            return redirect('/selectDashboard')->with('success', 'New Notice Added To List');

            // $result = (new HomeController)->index2($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
