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
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form class="form-group required" method="POST" action="{{ url('bank') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-control" id="bank_name" name="bank_name">
                                <option value="HSBC">HSBC</option>
                                <option value="Dutch-Bangla Bank">Dutch-Bangla Bank</option>
                                <option value="Sonali Bank">Sonali Bank</option>
                                <option value="Islami Bank Bangladesh Limited (IBBL)">Islami Bank Bangladesh Limited
                                    (IBBL)</option>
                                <option value="Grameen Bank">Grameen Bank</option>
                                <option value="Janata Bank">Janata Bank</option>
                                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                <option value="Prime Bank Limited">Prime Bank Limited</option>
                            </select>
                            <label class="control-label" for="inputEmargencyContactAddress">Select Bank Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="accountHolder_name" type="text" class="form-control" name="accountHolder_name"
                                required autocomplete="name" autofocus placeholder="Account Holder Name">
                            <label class="control-label" for="inputName">Account Holder Name </label>

                            @error('name')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #84bb6e">A/C NO:</span>
                                </div>
                                <input id="account_number" type="number" class="form-control" name="account_number"
                                    required autocomplete="account_number" autofocus placeholder="121333456789">
                            </div>

                            <label class="control-label" for="inputContactNumber">A/C Number</label>

                            @error('phone')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #84bb6e">Cheque Ser.
                                        NO:</span>
                                </div>
                                <input id="chq_number" type="number" class="form-control" name="chq_number" required
                                    autocomplete="chq_number" autofocus placeholder="121333456789">
                            </div>

                            <label class="control-label" for="inputContactNumber">Cheque Serial Number</label>

                            @error('phone')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #84bb6e">Atm Card No:</span>
                                </div>
                                <input id="atmCard_number" type="number" class="form-control" name="atmCard_number"
                                    required autocomplete="chq_number" autofocus placeholder="121333456789">
                            </div>

                            <label class="control-label" for="inputContactNumber">Atm Card Number</label>

                            @error('phone')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>

                        {{-- <div class="form-floating mb-3">
                            <select class="form-control" id="religious" name="religious">
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Buddhism">Other</option>
                            </select>
                            <label class="control-label" for="inputEmargencyContactAddress">Maritial Status</label>
                        </div> --}}
                        {{-- Submit Button --}}
                        <div class=" d-flex align-items-center justify-content-end mt-4 mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
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
                        <th>Bank Name</th>
                        <th>A/C Holder Name</th>
                        <th>A/C Number</th>
                    </tr>
                </thead>
                @foreach ($banks as $bank)
                <tbody class="text-center">
                    <tr class="table-secondary">
                        <td><i class="fa-solid fa-building-columns"></i> :{{ $no++ }}</td>
                        <td>{{ $bank->bank_name }}</td>
                        <td>{{ $bank->accountHolder_name }}</td>
                        @php
                        $var = $bank->account_number;
                        if (!function_exists("mask_acc_no")) {
                        function mask_acc_no($var)
                        {
                        return substr($var, 0, 3) . '******' . substr($var, -3);
                        }
                        }

                        @endphp
                        <td>
                            @php
                            echo mask_acc_no($var) ;
                            @endphp
                        </td>
                    </tr>
                    @endforeach

                    <tr style="background-color: #94549c; color:whitesmoke">
                        <td><i class="fa-solid fa-equals"></i></td>
                        <td colspan="3"><strong><b>Total ( {{ $counts }} ) Account Created</b></strong></td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection