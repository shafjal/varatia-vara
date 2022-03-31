@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h3 class="mt-4 textColor">Select Building
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenterReply"
            title="Create New">
            +
        </button>
        <span style="float:right">
            {{ $curentDay}},
            {{ $currentDate }}
        </span>
    </h3>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;margin-top: 30px;">
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

    <div class="modal fade" id="exampleModalCenterReply" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitleReply" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Appartment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-floating mb-3">
                            <div class="input-group">
                                <input class="form-control" id="inputPassword" type="text"
                                    placeholder="EX: Abanil Apartment" />
                            </div>
                            <label for="inputPassword">Apartment Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group">
                                <input class="form-control" id="inputPassword" type="text" placeholder="EX: 16 " />
                            </div>
                            <label for="inputPassword">Total Flat</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group">
                                <input class="form-control" id="inputPassword" type="text"
                                    placeholder="EX: H#21/21,Block#C,Mirpur 6, Dhaka" />
                            </div>
                            <label for="inputPassword">Address</label>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>

    @endsection