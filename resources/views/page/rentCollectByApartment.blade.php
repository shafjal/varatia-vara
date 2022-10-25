@extends('layouts.app')

@section('content')


<div class="container-fluid px-4">

    <h5 class="mt-4 textColor">Rent Collection From Apartment </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- Succuees Delete --}}

    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <table class="table table-bordered table-hover myShadow rounded-lg" id="datatablesSimple">
                <thead class="text-center bg-info">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Apartment</th>
                        <th>Floor</th>
                        <th colspan="2">Rent</th>
                    </tr>

                </thead>
                <form class="form-group required" method="POST" action="{{ route('rent.by.apartment.store',$apt_id) }}">
                    @csrf
                    <tbody class="text-center">
                        <tr class="table-secondary">
                            @foreach ($apt as $item)
                            <td><i class="fa-solid fa-users"></i></td>
                            <td>{{ $item->name }}</td>
                            <input type="hidden" id="user_id[]" name="user_id[]" value="{{ $item->user_id }}" />
                            <td>{{ $item->phone }}</td>
                            <input type="hidden" id="phone[]" name="phone[]" value="{{ $item->phone }}" />
                            <td>{{ $item->apartment_name }}</td>
                            <input type="hidden" id="apartment_name[]" name="apartment_name[]"
                                value="{{ $item->apartment_name }}" />
                            <td>{{ $item->floor_number }}</td>
                            <input type="hidden" id="floor_number[]" name="floor_number[]"
                                value="{{ $item->floor_number }}" />
                            <td class="text-center">
                                <input id="rent_amount_fixed[]" type="text" class="form-control"
                                    name="rent_amount_fixed[]" value="{{ $item->rent }}" required
                                    autocomplete="rent_amount_fixed" readonly>
                            </td>
                            <td class="text-center">
                                <input id="rent_amount" type="text" class="form-control " name="rent_amount[]"
                                    value="{{ $item->rent }}" required autocomplete="rent_amount">
                            </td>
                        </tr>
                        @endforeach
                        <tr style="background-color: #94549c; color:whitesmoke">
                            {{-- <td><i class="fa-solid fa-equals"></i></td> --}}
                            {{-- <td colspan="7"><strong><b>Total Account Request </b></strong></td> --}}
                            <td colspan="7"><button type="submit" class="btn btn-primary">Primary</button></td>
                        </tr>
                    </tbody>
                </form>
            </table>
        </div>
    </div>
</div>
@endsection