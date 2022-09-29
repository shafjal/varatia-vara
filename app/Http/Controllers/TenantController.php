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
        
        $tenats = Tenant::all()->sortDesc();
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
        return redirect('/tenant/create')->with('success', 'New Tenant Added To List');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenant_id = Tenant::find($id);
        return view('page.tenantShow',compact('tenant_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenant_id = Tenant::find($id);
        return view('page.tenantEdit',compact('tenant_id'));
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
            $request->validate([
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

        $tenant = Tenant::find($id);
        $tenant->name =  $request->get('name');
        $tenant->fathers_name = $request->get('fathers_name');
        $tenant->e_name = $request->get('e_name');
        $tenant->e_address = $request->get('e_address');
        $tenant->e_relation = $request->get('e_relation');
        $tenant->e_phone = $request->get('e_phone');
        $tenant->maritial_status = $request->get('maritial_status');
        $tenant->address = $request->get('address');
        $tenant->date_of_b = $request->get('date_of_b');
        $tenant->phone = $request->get('phone');
        $tenant->nid = $request->get('nid');
        $tenant->education = $request->get('education');
        $tenant->job_title = $request->get('job_title');
        $tenant->job_location = $request->get('job_location');
        $tenant->religious = $request->get('religious');
        $tenant->country = $request->get('country');
        $tenant->save();

        return redirect('/tenant')->with('success-update', 'Tenant Details Update Successfully');
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
        return redirect('/tenant')->with('success-delete', 'Tenant Deleted Successfully');
    }

}
