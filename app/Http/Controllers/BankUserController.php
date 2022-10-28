<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\BankUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BankUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        public function deposit_view()
        {       
                $amounts = BankUser::all()->sum('amount');
                $banks = Bank::all();
                $last_row = DB::table('bank_users')
                ->join('users','bank_users.user_id','users.id')
                ->join('banks','bank_users.banks_id','banks.id')
                ->select('bank_users.*','users.name','banks.bank_name')
                ->latest()
                ->first();
                return view('page.bankDeposit', compact('banks','amounts','last_row'));
                
        }
        public function deposit_store(Request $request)
        {       

                BankUser::insert([
                'banks_id' => $request->select_bank,
                'user_id' => Auth::user()->id,
                'trxid' => $request->trxid,
                'created_at' => Carbon::now(),
                'amount' => $request->amount,
            ]);
            return redirect('/banks/deposit')->with('success', 'New Ammount Added ');
        }

                public function withdraw()
        {
                $amounts = BankUser::all()->sum('amount');
                $withdraw_amount = BankUser::all()->sum('withdraw');
                $new_ballance = $amounts - $withdraw_amount;
                $banks = Bank::all();
                $last_row = DB::table('bank_users')
                ->join('users','bank_users.user_id','users.id')
                ->join('banks','bank_users.banks_id','banks.id')
                ->select('bank_users.*','users.name','banks.bank_name')
                ->latest()
                ->first();
                $all = DB::table('bank_users')
                ->join('users','bank_users.user_id','users.id')
                ->join('banks','bank_users.banks_id','banks.id')
                ->select('bank_users.*','users.name','banks.bank_name','banks.accountHolder_name','banks.account_number')
                ->get();
                return view('page.bankWithdraw', compact('banks','amounts','last_row','all','new_ballance'));
        }
        public function withdraw_store(Request $request)
        {
            $wd_am = $request->withdraw_amount;
            $id = $request->withdraw_account;
            $datas = BankUser::find($id);
            $id = $datas->user_id;
            $this_banks_id= $datas->banks_id;
            $this_user_id= $datas->user_id;
            $this_withdraw = $wd_am;
            

            // $this_amount=  $this_withdraw - $wd_am;
            $datas->updated_at =  Carbon::now();
            $datas->banks_id =  $this_banks_id;
            $datas->user_id =  $this_user_id;
            // $datas->amount =  $this_amount;
            $datas->withdraw =  $this_withdraw;
            $datas->save();
            return redirect('/banks/withdraw')->with('success', 'Withdraw Successfully');
        }
}
