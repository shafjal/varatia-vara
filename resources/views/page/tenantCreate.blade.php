@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Enter Tenant Details </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class=" card myShadow border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-center font-weight-bold my-2">Tenant Registration</h3>
                </div>
                <div class="card-body">
                    {{-- success message --}}
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form class="form-group required" method="POST" action="{{ route('tenant.store') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input id="name" type="text" class="form-control" name="name" required autocomplete="name"
                                autofocus placeholder="Tenant Name">
                            <label class="control-label" for="inputName">Tenant Name </label>

                            @error('name')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="address" type="text" class="form-control" name="address" required
                                autocomplete="address" autofocus placeholder="Parmanent Address">
                            <label class="control-label" for="inputParmanentAddress">Parmanent Address </label>

                            @error('address')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #84bb6e">+88</span>
                                </div>
                                <input id="phone" type="text" class="form-control" name="phone" required
                                    autocomplete="phone" autofocus placeholder="017XXXXXXXX">
                            </div>

                            <label class="control-label" for="inputContactNumber">Contact Number</label>

                            @error('phone')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="nid" type="text" class="form-control" name="nid" required autocomplete="nid"
                                autofocus placeholder="NID Number">
                            <label class="control-label" for="inputNIDNumber">NID Number</label>

                            @error('nid')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="country" type="text" class="form-control" name="country" required
                                autocomplete="country" autofocus placeholder="Country">
                            <label class="control-label" for="inputCountry">Country</label>

                            @error('country')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="religious" name="religious">
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Buddhism">Other</option>
                            </select>
                            <label class="control-label" for="inputEmargencyContactAddress">Maritial Status</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="education" type="text" class="form-control" name="education" required
                                autocomplete="education" autofocus placeholder="MSc / BSc / BBA / HSC / SSC etc.">
                            <label class="control-label" for="inputEducation">Education</label>

                            @error('education')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="job_title" type="text" class="form-control" name="job_title" required
                                autocomplete="job_title" autofocus placeholder="Job Title">
                            <label class="control-label" for="inputJobTitle">Job Title</label>

                            @error('job_title')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="job_location" type="text" class="form-control" name="job_location" required
                                autocomplete="job_location" autofocus
                                placeholder="Ex: PRAN-RFL Group, 105 Pragati Sarani, Dhaka 1212">
                            <label class="control-label" for="inputJobLocation">Company Name, Address</label>

                            @error('job_location')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="fathers_name" type="text" class="form-control" name="fathers_name" required
                                autocomplete="fathers_name" autofocus placeholder="Fathers Name">
                            <label class="control-label" for="inputFathersName">Fathers Name</label>

                            @error('fathers_name')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="e_name" type="text" class="form-control" name="e_name" required
                                autocomplete="e_name" autofocus placeholder="Emargency Contact Name">
                            <label class="control-label" for="inputEmargencyContactName">Emargency Contact Name</label>

                            @error('e_name')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="e_address" type="text" class="form-control" name="e_address" required
                                autocomplete="e_address" autofocus placeholder="Emargency Contact Address">
                            <label class="control-label" for="inputEmargencyContactAddress">Emargency Contact
                                Address</label>

                            @error('e_address')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="e_relation" type="text" class="form-control" name="e_relation" required
                                autocomplete="e_relation" autofocus placeholder="Relation With Emargency Contact">
                            <label class="control-label" for="inputRelationWithEmargencyContact">Relation With Emargency
                                Contact</label>

                            @error('e_relation')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #84bb6e">+88</span>
                                </div>
                                <input id="e_phone" type="text" class="form-control" name="e_phone" required
                                    autocomplete="e_phone" autofocus placeholder="017XXXXXXXX">
                            </div>

                            <label class="control-label" for="inputEmargencyContactNumber">Emargency Contact
                                Number</label>

                            @error('e_phone')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="maritial_status" name="maritial_status">
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                            <label class="control-label" for="inputEmargencyContactAddress">Maritial Status</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="date_of_b" type="text" class="form-control" name="date_of_b" value="" required
                                autocomplete="date_of_b" placeholder="Ex: 12/11/2020">
                            <label class="control-label" for="inputTenantDateofbirth">Tenant Date of birth</label>

                            @error('date_of_b')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
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