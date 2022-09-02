@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor"><span style="background-color: red">Delete Bank Account</span>
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
            <table class="table table-hover table-responsive-md table-bordered myShadow">
                <thead class="bg-success text-center">
                    <tr>
                        <th>#</th>
                        <th>Bank Name</th>
                        <th>Holder Name</th>
                        <th>A/C Number</th>
                        <th>Chq Number</th>
                        <th>Atm Number</th>
                        {{-- <th>Email <span> <sub>(Can Not Be Change)</sub></span></th> --}}
                        <th>Action</th>
                    </tr>
                </thead>


                <tbody class="bg-info">
                    @foreach ($bankDataAlls as $bankData)
                    <tr class="text-center">
                        <td><i class="fa-solid fa-building-columns"></i></td>
                        <td>{{$bankData->id }}</td>
                        <td>{{$bankData->accountHolder_name }}</td>
                        <td>{{$bankData->account_number }}</td>
                        <td>{{$bankData->chq_number }}</td>
                        <td>{{$bankData->atmCard_number }}</td>

                        <td class="text-center">
                            <form action="{{ url('bank/'.$bankData->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection