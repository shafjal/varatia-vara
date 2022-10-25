<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Assign;
use App\Rent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
Use Illuminate\Support\Carbon;

use function GuzzleHttp\Promise\all;

class RentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $apartments = Apartment::all();
        return view('page.rent',compact('apartments'));
    }
    public function rent_by_apartment($id)
    {
        $apt_id = $id;
        $apt = DB::table('assigns')
                ->join('tenants','assigns.user_id','tenants.id')
                ->join('apartments','assigns.apartment_id','apartments.id')
                ->select('tenants.name','tenants.phone','apartments.apartment_name','assigns.floor_number','assigns.rent','assigns.user_id')
                ->Where('assigns.apartment_id', '=', $id)
                ->get();
        return view('page.rentCollectByApartment',compact('apt','apt_id'));
    }
    public function rent_by_apartment_store(Request $request,$id)
    {
        $apartment_id = $id;
        $user_id = $request->user_id;
        $phone = $request->phone;
        $apartment_name = $request->apartment_name;
        $floor_number = $request->floor_number;
        $rent_amount_fixed = $request->rent_amount_fixed;
        $rent_amount = $request->rent_amount;
        
        for ($i=0; $i < count($user_id); $i++) { 
            $data_save = [
                'created_at' => Carbon::now(),
                'apartment_id' => $apartment_id,
                'user_id' => $user_id[$i],
                'phone' => $phone[$i],
                'apartment_name' => $apartment_name[$i],
                'floor_number' => $floor_number[$i],
                'rent_amount_fixed' => $rent_amount_fixed[$i],
                'rent_amount' => $rent_amount[$i],
            ];
            DB::table('rents')->insert($data_save);
        }
    }
}
