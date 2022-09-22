@extends('layouts.app')

@section('content')


<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Deposit To Your Account<span style="float:right">
            {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-pen-square fa-1x " aria-hidden="true" style="float:left;"> Create</i>
            </button> --}}
        </span>
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-xl-8 col-md-8">
            <div class="card text-white" style="background-color: #2a54aa">
                <div class="card-body" style="font-family:  Apple Chancery, cursive;">
                    <h1 class="card-title">
                        <strong>
                            <b>Deposit</b>
                        </strong>
                        <span style="float:right">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                {{-- <i class="fas fa-pen-square fa-1x " aria-hidden="true" style="float:left;">
                                    Home</i> --}}
                                <i class="fa-solid fa-house-user fa-1x"></i>
                            </button>
                        </span>
                    </h1>
                    <p class="card-text">
                        Deposit any amout balance in selected amount, it will be adjust with your Bank Dash Board.
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Current Balance</h5>
                            <h3>BDT: 30,000/=</h3>
                            <h6>Account Number</h6>
                            <h5>140****3888</h5>
                        </div>

                        <div class="col-md-7">
                            <div class="form-floating mb-3">
                                <label class="control-label" for="inputEmargencyContactAddress">Select Account</label>
                                <select class="form-control" id="religious" name="religious">
                                    <option value="">Bkash - 01555555555</option>
                                    <option value="">Bkash - 01555555555</option>
                                    <option value="">Bkash - 01555555555</option>
                                    <option value="">Bkash - 01555555555</option>
                                    <option value="">Bkash - 01555555555</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <label class="control-label" for="inputCountry">Country</label>
                                <input id="country" type="text" class="form-control" name="country" required
                                    autocomplete="country" autofocus placeholder="Enter Ammount">

                                @error('country')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                            <div class="card myShadow card-border">
                                <div class="card-body" style="background-color: #ea0164;">
                                    A/C Holder: Kh. Afjal Hossen
                                </div>
                            </div>
                            {{-- Submit Button --}}
                            <div class=" d-flex align-items-center justify-content-end mt-4 mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection