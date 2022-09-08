@extends('layouts.app')

@section('content')


<div class="container-fluid px-4">

    <h5 class="mt-4 textColor">Add Account Details </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row ">
        <div class="offset-md-1 col-md-5">
            <div class=" card myShadow border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-center font-weight-bold my-2">Add Account</h3>
                </div>
                <div class="card-body">
                    {{-- success message --}}
                    <form method="POST" action="">
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=" col-md-5 ">
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
                            <a title="View" href="" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fa-solid fa-square-check" style="color: green"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a title="Delete" type="submit" href="">
                                @csrf
                                <i class="fa-solid fa-user-xmark" style="color: red"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <tr style="background-color: #94549c; color:whitesmoke">
                        <td><i class="fa-solid fa-equals"></i></td>
                        <td colspan="4"><strong><b>Total Account Created</b></strong></td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection