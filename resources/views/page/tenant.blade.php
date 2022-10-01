@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Tenant Details
        <a class="btn btn-success btn-sm" href="{{ route('tenant.create') }}">+ Add Tenant
        </a>
        <span style="float:right">
            {{-- Dropdown Searcch --}}
            {{-- <div class="btn-group dropleft">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" style="background: #8ef4bb"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All Tenant
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background: #f9e829">
                    <a class="dropdown-item" href="#">Flat:1</a>
                    <a class="dropdown-item" href="#">Flat:2</a>
                    <a class="dropdown-item" href="#">Flat:3</a>
                    <a class="dropdown-item" href="#">Flat:4</a>
                    <a class="dropdown-item" href="#">Flat:5</a>
                    <a class="dropdown-item" href="#">Flat:6</a>
                    <a class="dropdown-item" href="#">Flat:7</a>
                </div>
            </div> --}}
        </span>
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row">

        <div class="col-md-12">
            @if (session('success-delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('success-delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session('success-update'))
            <div class="alert alert-custom alert-dismissible fade show" role="alert">
                <strong>{{ session('success-update')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <table class="table table-hover table-responsive-md table-bordered myShadow">
                <thead class="bg-success text-center">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Father Name</th>
                        <th>Emergency Contact Name</th>
                        <th>Emergency Contact Phone</th>
                        {{-- <th>Email <span> <sub>(Can Not Be Change)</sub></span></th> --}}
                        <th colspan="3">Action</th>
                    </tr>
                </thead>

                @foreach ($tenats as $tenant)
                <tbody class="bg-info">
                    <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $tenant->name }}</td>
                        <td>{{ $tenant->phone }}</td>
                        <td>{{ $tenant->address }}</td>
                        <td>{{ $tenant->fathers_name }}</td>
                        <td>{{ $tenant->e_name }}</td>
                        <td>{{ $tenant->e_phone }}</td>
                        {{-- Assign --}}
                        <td d class="text-center">
                            <a title="Assing To Appartment" href="{{ route('tenant.assign.view',$tenant->id) }}">
                                @csrf
                                <i class="fa-solid fa-house-circle-check" style="color: blue"></i>
                            </a>
                        </td>
                        {{-- View--}}
                        <td d class="text-center">
                            <a title="View" href="{{ route('tenant.show',$tenant->id) }}">
                                <i class="fas fa-eye" style="color: green"></i>
                            </a>
                        </td>
                        {{-- Delete --}}
                        <td class="text-center">
                            <a title="Delete" type="submit" href="{{ route('tenant.destroy', $tenant->id)}}">
                                @csrf
                                <i class="fas fa-trash" style="color: red"></i>
                            </a>
                        </td>

                    </tr>

                </tbody>
                @endforeach
            </table>
        </div>

    </div>
</div>

@endsection