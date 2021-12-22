@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Tenant Details </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row">

        <div class="col-md-6">
            <table class="table table-hover table-responsive-md table-bordered myShadow">
                <thead class="bg-info text-center">
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email <span> <sub>(Can Not Be Change)</sub></span></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-success">
                    <tr>
                        <td>{{ Auth::user()->name }}</td>
                        <td>59 BGB</td>
                        <td>shuvoafjal@gmail.com</td>
                        <td class="text-center">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-eye" style="color: green"></i>
                            </a>
                            &nbsp;
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-edit" style="color: blue"></i>
                            </a>
                            &nbsp;
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-trash" style="color: red"></i>
                            </a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-5">
            <div class=" card myShadow border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-center font-weight-bold my-2">Tenant Registration</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input id="name" type="name" class="form-control" name="name" value="" required
                                autocomplete="name" autofocus placeholder="Tenant Name">
                            <label for="inputName">Tenant Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #84bb6e">+88</span>
                                </div>
                                <input id="phone" type="phone" class="form-control" name="phone" value="" required
                                    autocomplete="phone" autofocus placeholder="017XXXXXXXX">
                            </div>

                            <label for="inputContactNumber">Contact Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="nid" type="nid" class="form-control" name="nid" value="" required
                                autocomplete="nid" autofocus placeholder="NID Number">
                            <label for="inputNIDNumber">NID Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="country" type="country" class="form-control" name="country" value="" required
                                autocomplete="country" autofocus placeholder="Country">
                            <label for="inputCountry">Country</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="religious" name="religious">
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Buddhism">Other</option>
                            </select>
                            <label for="inputEmargencyContactAddress">Maritial Status</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="education" type="name" class="form-control" name="education" value="" required
                                autocomplete="education" autofocus placeholder="MSc / BSc / BBA / HSC / SSC etc.">
                            <label for="inputEducation">Education</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="job_title" type="job_title" class="form-control" name="job_title" value=""
                                required autocomplete="job_title" autofocus placeholder="Job Title">
                            <label for="inputJobTitle">Job Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="job_location" type="job_location" class="form-control" name="job_location"
                                value="" required autocomplete="job_location" autofocus
                                placeholder="Ex: PRAN-RFL Group, 105 Pragati Sarani, Dhaka 1212">
                            <label for="inputJobLocation">Company Name, Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="fathers_name" type="fathers_name" class="form-control" name="fathers_name"
                                value="" required autocomplete="fathers_name" autofocus placeholder="Fathers Name">
                            <label for="inputFathersName">Fathers Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="e_name" type="e_name" class="form-control" name="e_name" value="" required
                                autocomplete="e_name" autofocus placeholder="Emargency Contact Name">
                            <label for="inputEmargencyContactName">Emargency Contact Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="e_address" type="e_address" class="form-control" name="e_address" value=""
                                required autocomplete="e_address" autofocus placeholder="Emargency Contact Address">
                            <label for="inputEmargencyContactAddress">Emargency Contact Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="e_relation" type="e_relation" class="form-control" name="e_relation" value=""
                                required autocomplete="e_relation" autofocus
                                placeholder="Relation With Emargency Contact">
                            <label for="inputRelationWithEmargencyContact">Relation With Emargency Contact</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #84bb6e">+88</span>
                                </div>
                                <input id="e_phone" type="e_phone" class="form-control" name="e_phone" value="" required
                                    autocomplete="e_phone" autofocus placeholder="017XXXXXXXX">
                            </div>

                            <label for="inputEmargencyContactNumber">Emargency Contact Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="maritial_status" name="maritial_status">
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                            <label for="inputEmargencyContactAddress">Maritial Status</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="date_of_b" type="date" class="form-control" name="date_of_b" value="" required
                                autocomplete="address">
                            <label for="inputTenantParmanentAddress">Tenant Date of birth</label>
                        </div>

                        {{-- Submit Button --}}
                        <div class=" d-flex align-items-center justify-content-end mt-4 mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection