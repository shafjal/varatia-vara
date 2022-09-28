<?php

namespace App\Http\Controllers;

use App\Bank;
use App\BankUser;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
                $amounts = BankUser::all()->sum('amount');
                $withdraws = BankUser::all()->sum('withdraw');
                $all = DB::table('bank_users')
                ->join('users','bank_users.user_id','users.id')
                ->join('banks','bank_users.banks_id','banks.id')
                ->select('bank_users.*','users.name','banks.bank_name','banks.accountHolder_name','banks.account_number')
                ->get();
                // Number Convert
                $number = BankUser::all()->sum('amount');
                $word = $this->convert_number_to_words($number);
                //  Date Range
                $startDate = Carbon::now()->startOfMonth();
                $endDate = Carbon::now();
                $this_mount_deposit = BankUser::whereBetween('created_at', [$startDate, $endDate])->sum('amount');

                // join + Date filter + get data 
                $bank_users_all = DB::table('bank_users')
                ->join('users','bank_users.user_id','users.id')
                ->join('banks','bank_users.banks_id','banks.id')
                ->select('bank_users.*','users.name','banks.bank_name','banks.accountHolder_name','banks.account_number')
                ->whereBetween('bank_users.created_at', [$startDate, $endDate])
                ->get();
                $withdraw_by = DB::table('bank_users')
                ->join('users','bank_users.user_id','users.id')
                ->join('banks','bank_users.banks_id','banks.id')
                ->select('bank_users.*','users.name','banks.bank_name','banks.accountHolder_name','banks.account_number')
                ->whereBetween('bank_users.updated_at', [$startDate, $endDate])
                ->get();
                $word_two = $bank_users_all->sum('amount');
                $word_convert = $this->convert_number_to_words($word_two);

                $this_mount_withdraw = BankUser::whereBetween('created_at', [$startDate, $endDate])->sum('withdraw');
                return view('page.bankDashboard', compact('curentDay','currentDate','curentMonth',
                'currentYear','banks','amounts','all','word','this_mount_deposit','bank_users_all',
                'word_convert', 'this_mount_withdraw','withdraw_by', 'withdraws'));
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

    public static function convert_number_to_words($number) {

        $hyphen      = '-';
        $conjunction = ' and ';
        $separator   = ', ';
        $negative    = 'negative ';
        $decimal     = ' point ';
        $dictionary  = array(
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'fourty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
            100                 => 'hundred',
            1000                => 'thousand',
            1000000             => 'million',
            1000000000          => 'billion',
            1000000000000       => 'trillion',
            1000000000000000    => 'quadrillion',
            1000000000000000000 => 'quintillion'
        );

        if (!is_numeric($number)) {
            return false;
        }

        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }

        if ($number < 0) {
            return $negative . Self::convert_number_to_words(abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . Self::convert_number_to_words($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = Self::convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= Self::convert_number_to_words($remainder);
                }
                break;
        }

        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }

        return $string;
    }
}
