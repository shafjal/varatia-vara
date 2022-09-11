<?php

namespace App\Http\Controllers;

use App\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;

class TenantController extends Controller
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

    public function familyMember(){
        $tenats = Tenant::all();
        return view('page.family', compact('tenats'));
    }

    public function checkUserid()
    {
        //  $user = User::find(4);
        //  $td = $user->id;
        // //  dd($td);
        // //  die;
        //  $test_data = "4";
        // if ($td == $test_data) {
        //             $tenats = Tenant::all();
        // return view('page.tenant', compact('tenats'))->with('no',1);
        // } else {
        //     return view('page.message');
        // }

        return view('page.test');
    }
    public function index()
    {
        
        $tenats = Tenant::all();
        return view('page.tenant', compact('tenats'))->with('no',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.tenantCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validated = $request->validate([
            'name' => 'required|max:255',
            'fathers_name' => 'required|max:255',
            'e_name' => 'required|max:255',
            'e_address' => 'required|max:255',
            'e_relation' => 'required|max:255',
            'e_phone' => 'required|max:255',
            'maritial_status' => 'required|max:255',
            'address' => 'required|max:255',
            'date_of_b' => 'required|max:255',
            'phone' => 'required|max:255',
            'nid' => 'required|max:255',
            'education' => 'required|max:255',
            'job_title' => 'required|max:255',
            'job_location' => 'required|max:255',
            'religious' => 'required|max:255',
            'country' => 'required|max:255',
    ]);

        Tenant::insert([
            'name' => $request->name,
            'fathers_name' => $request->fathers_name,
            'e_name' => $request->e_name,
            'e_address' => $request->e_address,
            'e_relation' => $request->e_relation,
            'e_phone' => $request->e_phone,
            'maritial_status' => $request->maritial_status,
            'address' => $request->address,
            'e_relation' => $request->e_relation,
            'date_of_b' => $request->date_of_b,
            'phone' => $request->phone,
            'nid' => $request->nid,
            'education' => $request->education,
            'job_title' => $request->job_title,
            'job_location' => $request->job_location,
            'religious' => $request->religious,
            'country' => $request->country,
            
        ]);
        return redirect('/tenant/create')->with('success', 'Tenant new data saved!');
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
        $tenant = Tenant::find($id);
        $tenant->delete();
        return redirect('/tenant')->with('success-delete', 'Tenant data deleted!');
    }

}
