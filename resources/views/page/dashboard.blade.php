@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 textColor">Dashboard</h1>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fa fa-money fa-2x" aria-hidden="true" style="float:left;">

                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Current Balance</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">70,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fa fa-money fa-2x" aria-hidden="true" style="float:left;">

                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Current Due</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">70,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fa fa-money fa-2x" aria-hidden="true" style="float:left;">

                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Previous Due</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">70,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fa fa-money fa-2x" aria-hidden="true" style="float:left;">

                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Estimet Cost</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">70,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card myShadow">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @foreach ($admin as $user)
                    <ul id="printableArea">
                        <Li>Id = {{$user->id}}</Li>
                        <li>Name = {{$user->name}}</li>
                        <li>email = {{$user->email}}</li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection