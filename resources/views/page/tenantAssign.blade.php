@extends('layouts.app')
@section('content')


<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Rent Collection Form </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class=" card myShadow border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-center font-weight-bold my-2">Add Tenant To Apartment</h3>
                </div>
                <div class="card-body">

                    <form class="form-group required">
                        <div class="form-floating mb-3">
                            <input id="tenant_name" type="text" class="form-control" name="tenant_name" required
                                autocomplete="tenant_name" autofocus placeholder=" {{ $tenant->name }}" disabled>
                            <label class="control-label" for="inputName"> Tenant Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="apartment_id" name="apartment_id">
                                <option value="" selected>Choose....</option>
                                @foreach ($apartment_list as $item)
                                <option value="{{ $item->id }}">{{ $item->apartment_name }}</option>
                                @endforeach
                            </select>
                            <label class="control-label" for="inputSelectApartment">Select Apartment</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="floor_number" type="text" class="form-control" name="floor_number" required
                                autocomplete="floor_number" autofocus placeholder="Floor Number">
                            <label class="control-label" for="inputFloorNumber">Floor Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="rent" type="number" class="form-control" name="rent" required autocomplete="rent"
                                autofocus placeholder="Rent">
                            <label class="control-label" for="inputRent"> Rent</label>
                        </div>
                    </form>
                </div>
                <div class="card-footer ">
                    {{-- Submit Button --}}
                    <div class=" d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection