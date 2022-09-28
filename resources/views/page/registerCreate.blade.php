@extends('layouts.app')

@section('content')


<div class="container-fluid px-4">

    <h5 class="mt-4 textColor">Approve Or Decline User </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- Succuees Delete --}}
    @if (session('success-delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('success-delete')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if (session('success-approve'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success-approve')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    {{-- card section --}}
    <div class="row ">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Register Request') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register Request') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7 ">
            <table class="table table-bordered table-hover myShadow rounded-lg" id="datatablesSimple">
                <thead class="text-center bg-info">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </tr>

                </thead>

                <tbody class="text-center">
                    <tr class="table-secondary">
                        @foreach ($register_requests as $register_request)
                        <td><i class="fa-solid fa-users"></i></td>
                        <td>{{ $register_request->name }}</td>
                        <td>{{ $register_request->email }}</td>
                        <td d class="text-center">
                            <form action="{{ route('register.apporve',$register_request->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-sm"><i class="fa-solid fa-square-check"
                                        style="color: green"></i></button>
                            </form>
                        </td>
                        <td class="text-center">
                            <form action="{{ route('register.destroy',$register_request->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-sm"><i class="fa-solid fa-user-xmark"
                                        style="color: red"></i>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr style="background-color: #94549c; color:whitesmoke">
                        <td><i class="fa-solid fa-equals"></i></td>
                        <td colspan="4"><strong><b>Total Account Request {{ $count }}</b></strong></td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection