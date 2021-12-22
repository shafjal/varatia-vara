@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h3 class="mt-4 textColor">Select Building <span style="float:right">
            {{ $curentDay}},
            {{ $currentDate }}

        </span></h3>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow" style="width: 18rem;">
                <img class="card-img-top" src="/apartment-1.jpg" alt="Card image cap" style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Abanil Apartment</h5>
                    <p class="card-text">
                        H#21/21,Block#C,Mirpur 6, Dhaka
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-warning">Dashboard</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow" style="width: 18rem;">
                <img class="card-img-top" src="/apartment-2.jpg" alt="Card image cap" style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Trinoyna Apartment</h5>
                    <p class="card-text">
                        H#21/21,Block#C,Mirpur 6, Dhaka
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-warning">Dashboard</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow" style="width: 18rem;">
                <img class="card-img-top" src="/apartment-3.jpg" alt="Card image cap" style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Sopno Bilash Apartment</h5>
                    <p class="card-text">
                        H#21/21,Block#C,Mirpur 6, Dhaka
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-warning">Dashboard</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow" style="width: 18rem;">
                <img class="card-img-top" src="/apartment-4.jpg" alt="Card image cap" style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Aleya Monjil</h5>
                    <p class="card-text">
                        H#21/21,Block#C,Mirpur 6, Dhaka
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-warning">Dashboard</a>
                </div>
            </div>
        </div>

    </div>

    @endsection