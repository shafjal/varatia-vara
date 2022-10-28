@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Rent Collection
        <span style="">
        </span>
        <span style="float:right">

        </span>
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow" style="width: 18rem;">
                <img class="card-img-top" src="{{url('/all_apartment.png')}}" alt="Card image cap"
                    style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Collect Rent From All Tenant</h5>
                    <p class="card-text">
                    </p>
                    <a href="{{ route('all.rent') }}" class="btn btn-warning" title="Collect Rent">Collect Rent</a>
                </div>
            </div>
        </div>
        @foreach ($apartments as $apartment)
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow" style="width: 18rem;">
                <img class="card-img-top" src="{{ $apartment->apartmant_image }}" alt="Card image cap"
                    style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">{{ $apartment->apartment_name }}</h5>
                    <p class="card-text">
                    </p>
                    <a href="{{ route('rent.by.apartment',$apartment->id) }}" class="btn btn-warning"
                        title="Collect Rent">Collect
                        Rent</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @endsection