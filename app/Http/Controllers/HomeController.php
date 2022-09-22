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
                $currentAppt = Apartment::find($variable);
                
                return view('page.dashboard', compact('admin','curentDay','currentDate','curentMonth','currentYear','apartment_all','currentAppt'));
        
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

        
                public function deposit()
        {
             
                return view('page.bankDeposit');
        }

}
