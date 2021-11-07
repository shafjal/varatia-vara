@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 textColor">Dashboard</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol> --}}

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