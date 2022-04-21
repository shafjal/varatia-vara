@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif (session('success-delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('success-delete')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
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
        @foreach ($imgs as $img)


        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow" style="width: 18rem;">
                <img class="card-img-top" src="{{ $img->apartmant_image }}" alt="Card image cap" style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">{{ $img->apartment_name }}</h5>
                    <p class="card-text">
                        {{ $img->apartment_address }}
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-warning" title="Goto Dashboard">Dashboard</a>
                    <a type="submit" style="float: right" href="{{ route('apartment.destroy', $img->id)}}"
                        class="btn btn-danger" title="Delete"><i style="color: white" class="fa-solid fa-trash"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="exampleModalCenterReply" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitleReply" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Appartment / Dashboard</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('apartment.store') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <div class="input-group">
                                <input class="form-control" name="apartment_name" id="apartment_name" type="text"
                                    placeholder="EX: Abanil Apartment" required autocomplete="apartment_name"
                                    autofocus />
                                @error('apartment_name')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                            <label for="apartment_name">Apartment Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group">
                                <input class="form-control" name="total_flat" id="total_flat" type="number"
                                    placeholder="EX: 16 " required autocomplete="total_flat" autofocus />
                                @error('total_flat')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                            <label for="total_flat">Total Flat</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group">
                                <input class="form-control" name="apartment_address" id="apartment_address" type="text"
                                    placeholder="EX: H#21/21,Block#C,Mirpur 6, Dhaka" required
                                    autocomplete="apartment_address" autofocus />
                                @error('apartment_address')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                            <label for="apartment_address">Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="apartmant_image" name="apartmant_image"
                                    required autocomplete="apartmant_image" autofocus />
                                @error('apartmant_image')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                                <label for="apartmant_image">Example file input</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">
                                {{ __('Submit') }}
                            </button>
                        </div>

                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">
                        {{ __('Submit') }}
                    </button>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection