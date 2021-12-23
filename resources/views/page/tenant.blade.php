@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Tenant Details </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row">

        <div class="col-md-12">
            @if (session('success-delete'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success-delete')}}</strong>
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
                        <th>Apartment</th>
                        <th>Flat No</th>
                        <th>Parmanent Address</th>
                        <th>Phone</th>
                        <th>Emargency Name</th>
                        <th>Emargency Phone</th>
                        {{-- <th>Email <span> <sub>(Can Not Be Change)</sub></span></th> --}}
                        <th colspan="4">Action</th>
                    </tr>
                </thead>

                @foreach ($tenats as $tenant)
                <tbody class="bg-info">
                    <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $tenant->name }}</td>
                        <td>{{ 'Abanil Apartment' }}</td>
                        <td>{{ '7B' }}</td>
                        <td>{{ $tenant->address }}</td>
                        <td>{{ $tenant->phone }}</td>
                        <td>{{ $tenant->e_name }}</td>
                        <td>{{ $tenant->e_phone }}</td>
                        <td class="text-center">
                            <a title="View" href="" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-eye" style="color: green"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a title="Edit" href="" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-edit" style="color: blue"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a title="Attach Apartment/Flat No" href="" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                <i class="fas fa-plus-square" style="color: blue"></i>
                            </a>
                        </td>
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