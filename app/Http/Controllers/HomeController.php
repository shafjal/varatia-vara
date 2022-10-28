<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Role;
use App\Tenant;
use App\Bank;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File; 
use App\Notice;
use Illuminate\Support\Facades\Auth;
use App\Miscellaneous;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BankController;
use App\Rent;

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
//tips
// echo "<pre>";
// print_r($events->all()->toArray()); 
// echo "</pre>";
// die;
// 1. dump($var)
// 2. dd($id)
// 3. var_dump($var)
// 4. die($var)
// 5. print_r($var)
        public function index2(Request $request)
        {
                $var = $request->id;
                //$this->index($var);  
                return $this->index($var);
        }
        public function index( $variable)
        {
                //dd($variable);
                $admin = User::all();
                $currentDate = Carbon::now()->timezone('Asia/Dhaka')->format('d/m/Y');
                $currentYear = Carbon::now()->timezone('Asia/Dhaka')->format('Y');
                $curentDay = Carbon::createFromFormat('d/m/Y',$currentDate)->format('l');
                $curentMonth = Carbon::createFromFormat('d/m/Y',$currentDate)->format('F');
                $apartment_all = Apartment::all();
                $miscellaneous_all = DB::table('miscellaneouses')
                ->join('users','miscellaneouses.user_id','users.id')
                ->select('miscellaneouses.*','users.name')
                ->get();
                $miscellaneous_cost = Miscellaneous::all()->sum('will_amount');
                $currentAppt = Apartment::find($variable);
                
                $word_convert = BankController::convert_number_to_words($miscellaneous_cost);

                $curentBalance = DB::table('rents')
                    ->where('apartment_id', '=', $variable)
                    ->sum('rent_amount');

                //Current Due
                $estimate = DB::table('assigns') ->where('apartment_id', '=', $variable) ->sum('rent');
                $collected = DB::table('rents') ->where('apartment_id', '=', $variable) ->sum('rent_amount');
                $total_due = $estimate - $collected;

                //Current Due List User 
                $due_user = DB::table('tenants')
                        ->select('tenants.name', 'tenants.phone', 'rents.user_id', 'assigns.rent', 'apartments.apartment_name', 'rents.created_at','assigns.floor_number')
                        ->join('assigns','tenants.id','=','assigns.user_id')
                        ->join('apartments','apartments.id','=','assigns.apartment_id')
                        ->leftJoin('rents','tenants.id','=','rents.user_id')
                        ->whereNull('rents.user_id')
                        ->get();

                $paid_user = DB::table('rents')
                        ->select('rents.*','tenants.name')
                        ->join('tenants','rents.user_id','=','tenants.id')
                        ->get();
                $total_paid = Rent::all()->sum('rent_amount');
                $in_word = BankController::convert_number_to_words($total_paid);

                return view('page.dashboard', compact('admin','curentDay','currentDate',
                'curentMonth','currentYear','apartment_all','currentAppt',
                'miscellaneous_all','miscellaneous_cost','word_convert','curentBalance','total_due',
                'due_user','paid_user','total_paid','in_word'));
        
        }
        public function selectDashboard()
        {
                $admin = User::all();
                $imgs = Apartment::all();
                $currentDate = Carbon::now()->timezone('Asia/Dhaka')->format('d/m/Y');
                $currentYear = Carbon::now()->timezone('Asia/Dhaka')->format('Y');
                $curentDay = Carbon::createFromFormat('d/m/Y',$currentDate)->format('l');
                $curentMonth = Carbon::createFromFormat('d/m/Y',$currentDate)->format('F');
                // dd($imgs);
                return view('page.selectDashboard', compact('admin','curentDay','currentDate','curentMonth','currentYear','imgs'));
            
        }
    

        public function profile()
        {
                //$admin = User::where('1');
                //dd($admin);
                $sum_of_total_flats = Apartment::all()->sum('total_flat');
                $total_apartmets = Apartment::all()->count();
                $total_tenants = Tenant::all()->count();
                return view('auth.profile', compact('sum_of_total_flats','total_apartmets','total_tenants'));
        }

        public function store(Request $request)
        {
                $validated = $request->validate([
                'apartment_name' => 'required|max:255',
                'total_flat' => 'required|max:255',
                'apartment_address' => 'required|max:255',
                'apartmant_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
                    $up_location = '/img/apartment/';
                    $apartmant_image = $up_location.hexdec(uniqid()).'.'.$request->apartmant_image->extension();     
                    $request->apartmant_image->move(public_path('img/apartment'), $apartmant_image);

            // $apartmant_image = $request->file('apartmant_image');
            // $name_gen = hexdec(uniqid());
            // $img_ext = strtolower($apartmant_image->getClientOriginalExtension());
            // $img_name = $name_gen.".".$img_ext;
            // $up_location = '/public/img/apartment/';
            // $last_image = $up_location.$img_name;
            // $apartmant_image -> move($up_location,$img_name);

            Apartment::insert([
                'apartment_name' => $request->apartment_name,
                'total_flat' => $request->total_flat,
                'apartment_address' => $request->apartment_address,
                'apartmant_image' => $apartmant_image,
            ]);
            return redirect('/selectDashboard')->with('success', 'New Apartment Created');
        }

        public function destroy($id)
        {
                $delete_this_apartment = Apartment::find($id);
                $old_img = $delete_this_apartment->apartmant_image;
                $trim_name = substr($old_img,"14");
                unlink(base_path('public\img\apartment'.$trim_name));
                
                $delete_this_apartment->delete();
                return redirect('/selectDashboard')->with('success-delete', 'Dashboard data deleted!');
        }

        public function bankDestroy (Request $request){
                $var = $request->cname;
                $tenant = Bank::find($var);
                $tenant->delete();
                return redirect('/bank')->with('success-delete', 'Bank Account data deleted!');

        }

        public function bankDestroyAll(){
                $bankDataAlls = Bank::all();
                return view('page.bankDelete',compact('bankDataAlls'));
        }

        public function mcreate()
        {
                $banks = Bank::all();
                $counts = Bank::count(); 
                return view('page.mBanks', compact('banks','counts'))->with('no',1);
        }

        public function tenantNotice()
        {
                $notices = Notice::all();
                return view('page.tenantNotice',compact('notices'));
        }



}
