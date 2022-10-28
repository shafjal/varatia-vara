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
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
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
                            <a href="{{ url('/bank') }}" type="button" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-house-user fa-1x"></i>
                            </a>
                        </span>
                    </h1>
                    <p class="card-text">
                        Deposit any amout balance in selected amount, it will be adjust with your Bank Dash Board.
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Current Total Balance</h5>
                            <h3>BDT: {{ $amounts }}</h3>
                            <h6><i class="fa-solid fa-hashtag fa-sm" style="color: #B2BABB"></i> Last Deposit By</h6>
                            <h5>
                                <i class="fa-solid fa-user-clock fa-sm " style="color: Salmon"></i>
                                @if (is_NUll($last_row->name))
                                {{ "No Data" }}
                                @else
                                {{ $last_row->name}}
                                @endif

                            </h5>
                            <h6><i class="fa-solid fa-hashtag fa-sm" style="color: #B2BABB"></i> Last Deposit Account
                            </h6>
                            <h5>
                                <i class="fa-solid fa-money-check-dollar fa-sm " style="color: Salmon"></i>
                                {{ $last_row->bank_name }}
                            </h5>
                            <h6><i class="fa-solid fa-hashtag fa-sm" style="color: #B2BABB"></i> Last Deposit Ammount
                            </h6>
                            <h5>
                                <i class="fa-solid fa-money-bill-1 fa-sm " style="color: Salmon"></i>
                                {{ $last_row->amount }}
                            </h5>
                            <h6><i class="fa-solid fa-hashtag fa-sm" style="color: #B2BABB"></i> Last Deposit Time &
                                Date</h6>
                            <h5>
                                <i class="fa-solid fa-calendar-days fa-sm " style="color: Salmon"></i>
                                {{ $last_row->created_at }}
                            </h5>
                        </div>
                        <div class="col-md-7">
                            <form action="{{ route('bankAccount.store') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <label class="control-label" for="selectBank">Select
                                        Account</label>
                                    <select class="form-control" id="select_bank" name="select_bank">
                                        @foreach ($banks as $item)
                                        <option value="{{ $item->id }}">{{ $item->bank_name}} - {{
                                            $item->accountHolder_name}} - {{ $item->account_number }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-floating mb-3">
                                    <label class="control-label" for="amount">Ref/cheque/TrxiD No</label>
                                    <input id="trxid" type="text" class="form-control" name="trxid" required
                                        autocomplete="trxid" autofocus placeholder="Enter Your Transacetion Number">

                                    @error('amount')
                                    <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <label class="control-label" for="amount">Enter Amount</label>
                                    <input id="amount" type="text" class="form-control" name="amount" required
                                        autocomplete="amount" autofocus placeholder="Enter Ammount">

                                    @error('amount')
                                    <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>
                                <div class="card myShadow card-border">
                                    <div class="card-body" style="background-color: #ea0164;">
                                        Login Account:
                                        {{ Auth::user()->name }}
                                    </div>
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
    </div>



</div>
@endsection