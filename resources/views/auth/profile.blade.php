@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>{{ __('My Profile') }}</h3></div>

                <div class="card-body text-center Metallic-Silver">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{-- pic + Details --}}
                        <div class="row justify-content-center ">
                            <div class="col-md-3 bg-secondary">
                                <img class="card-img-top mt-2" src="/avater.jpg" alt="Card image cap">
                                <div class="offset-md-2 col-md-1 col-lg-1 mt-3">
                                    <button type="button" class="btn btn-success">Upload Picture</button>
                                </div>    
                            </div>
                            <div class="col-md-8 ">
                                    <table class="table table-hover table-responsive-md  mt-5  table-bordered">
                                        <thead class="bg-success">
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-info">
                                            <tr>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>shuvoafjal@gmail.com</td>
                                                <td>
                                                    <a href="" >
                                                        <i class="icofont-edit" style="color: green"> Edit</i>
                                                    </a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection