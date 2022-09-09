<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Carbon\Carbon;

class BankController extends Controller
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
                $currentDate = Carbon::now()->timezone('Asia/Dhaka')->format('d/m/Y');
                $currentYear = Carbon::now()->timezone('Asia/Dhaka')->format('Y');
                $curentDay = Carbon::createFromFormat('d/m/Y',$currentDate)->format('l');
                $curentMonth = Carbon::createFromFormat('d/m/Y',$currentDate)->format('F');
                $banks = Bank::all();
        
            return view('page.bankDashboard', compact('curentDay','currentDate','curentMonth','currentYear','banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = Bank::all();
        $counts = Bank::count(); 
        return view('page.bankCreate', compact('banks','counts'))->with('no',1);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //         $validated = $request->validate([
    //         'bank_name' => 'required|max:255',
    //         'accountHolder_name' => 'required|max:255',
    //         'account_number' => 'required|max:255',
    //         'chq_number' => 'required|max:255',
    //         'atmCard_number' => 'required|max:255',
    // ]);

            Bank::insert([
            'bank_name' => $request->bank_name,
            'accountHolder_name' => $request->accountHolder_name,
            'account_number' => $request->account_number,
            'chq_number' => $request->chq_number,
            'atmCard_number' => $request->atmCard_number,
            
        ]);
        return redirect('/bank')->with('success', 'Account Added Successfully!');

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
        $banks = Bank::find($id);
        $banks->delete();
        return redirect('/bank/delete/all')->with('success-delete', 'Account data deleted!');
    }
}
