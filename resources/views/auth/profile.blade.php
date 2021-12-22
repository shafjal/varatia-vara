@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card myShadow">
                <div class="card-header">
                    <h3 class="">{{ __('My Profile') }} <span style="float:right; background-color: yellow; margin:1px">
                            <h5>Admin/Owner</h5>
                        </span></h3>
                </div>

                <div class="card-body text-center Metallic-Silver">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{-- pic + Details --}}

                    <div class="row justify-content-center ">
                        <div class="col-md-3 bg-info myShadow">
                            <img class="card-img-top mt-2" src="/avater.jpg" alt="Card image cap">
                            <div class="offset-md-2 col-md-1 col-lg-1 mt-3">
                                <button type="button" class="btn btn-success">Upload Picture</button>
                            </div>
                        </div>
                        <div class="col-md-8 ">
                            <table class="table table-hover table-responsive-md  mt-5  table-bordered myShadow">
                                <thead class="bg-info">
                                    <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email <span> <sub>(Can Not Be Change)</sub></span></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr>
                                        <td>{{ Auth::user()->name }}</td>
                                        <td>59 BGB</td>
                                        <td>shuvoafjal@gmail.com</td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                                                <i class="fas fa-edit" style="color: blue"></i>
                                            </a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- Appartemnt Details --}}
                            <div class="card myShadow text-left">
                                <div class="card-header">
                                    Appartemnt Details
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Building Has: 1</h5>
                                    <h5 class="card-title">Flat Number: 18</h5>
                                    <h5 class="card-title">Total Tenant: 18</h5>
                                </div>
                            </div>
                            {{-- Current Time --}}
                            {{-- @php
                            date_default_timezone_set("Asia/Dhaka");
                            echo date('Y-m-d h:i:s');
                            @endphp --}}
                        </div>
                    </div>
                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">My Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="text" value="Shuvo" />
                        {{-- <label for="inputEmail">Task Name</label> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="text" value="Afjal" />
                        {{-- <label for="inputPassword">Amount</label> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="text" value="59 BGB" />
                        {{-- <label for="inputPassword">Amount</label> --}}
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="text" value="shuvoafjal@gmail.com"
                            readonly />
                        <label for="">*** Email Can Not Be Change</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection