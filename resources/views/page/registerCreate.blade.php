@extends('layouts.app')

@section('content')


<div class="container-fluid px-4">

    <h5 class="mt-4 textColor">Add Account Details </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row ">
        <div class="offset-md-2 col-md-7 ">
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
                            <a title="Approve" href="" data-toggle="modal" data-target="#exampleModalCenter">
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