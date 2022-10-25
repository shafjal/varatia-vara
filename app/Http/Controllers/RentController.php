<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Assign;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        
        dd($request->all());
        dd($id);
    }
}
