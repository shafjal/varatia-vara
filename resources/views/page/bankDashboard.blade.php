@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Bank Details Dashboard
        <span style="float:right">
            <a class="btn btn-secondary btn-sm" href="{{ route('bankAccount.deposit') }}" title="Withdraw Money"><i
                    class="fa-solid fa-money-bill-trend-up"></i>
                Deposit
            </a>
            <a class="btn btn-warning btn-sm" href="" title="Withdraw Money"><i
                    class="fa-solid fa-money-bill-transfer"></i> Withdraw
            </a>
            <a class="btn btn-success btn-sm" href="" title="Add Account" data-toggle="modal"
                data-target="#addAccount"><i class="fa-solid fa-circle-plus"></i> Add
                Account
            </a>
            {{-- Add Account Model --}}
            <div class="modal fade" id="addAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <a class="btn btn-secondary " href="{{ url('bank/create') }}" title="Add Account"><i
                                    class="fa-solid fa-circle-plus" style="color: lawngreen"></i> Bank Account
                            </a>
                            <a class="btn btn-secondary " href="{{ url('banks/mobileBanks') }}" title="Add Account"><i
                                    class="fa-solid fa-circle-plus" style="color: lawngreen"></i> Mobile Bank Account
                            </a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-danger btn-sm" href="" title="Delete Account" data-toggle="modal"
                data-target="#deleteAccount"><i class="fa-solid fa-eraser"></i>
                Delete Account
            </a>
        </span>
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Total Bank Balance</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">2,30,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal"
                        data-target="#totalBalance">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px; color:black">{{ $curentMonth }}`s Month Deposit</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center" style="color: black">60,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small  stretched-link" href="#" data-toggle="modal" data-target="#lastMonthDeposit"
                        style="color: black">View
                        Details</a>
                    <div class="small"><i class="fas fa-angle-right" style="color: black"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-danger text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;"></i>
                    <h5 class="text-right" style="margin-top: 1px">{{ $curentMonth }}`s Month Withdraw</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">1,24,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal"
                        data-target="#lastMonthWithdraw">View
                        Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Modal Total Bank Balance-->
        <div class="modal fade" id="totalBalance" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Total Bank Balance</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered table-hover " id="datatablesSimple">
                            <thead class="text-center bg-info">
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>By</th>
                                    <th>Ammount</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr style="background-color: #94549c; color:whitesmoke">
                                    <td><i class="fa-solid fa-equals"></i></td>
                                    <td colspan="3"><strong><b>Total</b></strong></td>
                                    <td><strong><b>1,26,000</b></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="color: red">***In word, One Lakh Twenty Six Thousand Taka Only</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal last Month Deposit-->
        <div class="modal fade" id="lastMonthDeposit" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Possible Cost</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered table-hover " id="datatablesSimple">
                            <thead class="text-center bg-info">
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>By</th>
                                    <th>Ammount</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr style="background-color: #94549c; color:whitesmoke">
                                    <td><i class="fa-solid fa-equals"></i></td>
                                    <td colspan="3"><strong><b>Total</b></strong></td>
                                    <td><strong><b>1,26,000</b></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="color: red">***In word, Thirty Thousand Taka Only</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal last Month Withdraw-->
        <div class="modal fade" id="lastMonthWithdraw" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Possible Cost</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered table-hover " id="datatablesSimple">
                            <thead class="text-center bg-info">
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>By</th>
                                    <th>Ammount</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-money-check-dollar"></i></td>
                                    <td>23-01-2022</td>
                                    <td>Kh. Afjal Hossen</td>
                                    <td>Bank Cheque</td>
                                    <td>30,000/=</td>
                                </tr>
                                <tr style="background-color: #94549c; color:whitesmoke">
                                    <td><i class="fa-solid fa-equals"></i></td>
                                    <td colspan="3"><strong><b>Total</b></strong></td>
                                    <td><strong><b>1,26,000</b></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="color: red">***In word, One Lakh Twenty Four Thousand Taka Only</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Delete Account-->
        <div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Delete Bank Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <form action="{{ route('bankAccount.Delete')}}" method="post">
                                @csrf
                                <select class="form-control" name="cname">
                                    @foreach ($banks as $bank)
                                    <option value="{{ $bank->id }}">{{
                                        $bank->bank_name."-".$bank->accountHolder_name."-".$bank->account_number }}
                                    </option>
                                    @endforeach
                                </select>
                                <label class="control-label" for="inputEmargencyContactAddress">Select Bank
                                    Name</label>
                                <p style="color: red">***Warning, If you delete your account, it will not recover any
                                    more.you will loose every transaction data with account. Be Sure, Bedore Delete
                                    Account. It will hamper your Bank Account Dashboard. </p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </div>
                            </form>

                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
{{-- Account Details --}}
<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">A/C Details</h5>
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
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        @foreach ($banks as $bank)
        <div class="col-xl-6 col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <i class="fa-solid fa-building-columns"
                            style="font-size: 150px; margin-top:10%; margin-left: 10px;"></i>
                    </div>
                    <div class="col-md-8">

                        <div class="card-body">
                            <h5 class="card-title">{{ $bank->accountHolder_name }} </h5>
                            <p style="background-color: yellow" class="card-text">Bank Name: {{ $bank->bank_name }}</p>
                            <p style="background-color: yellow" class="card-text">A/C Number:
                                @php
                                $var = $bank->account_number;
                                if (!function_exists("mask_acc_no")) {
                                function mask_acc_no($var)
                                {
                                return substr($var, 0, 3) . '******' . substr($var, -3);
                                }
                                }
                                echo mask_acc_no($var) ;
                                @endphp
                            </p>
                            <p style="background-color: yellow" class="card-text"> Last Deposit: 30,000/=</p>
                            <p style="background-color: yellow" class="card-text"> Last Withdraw: 30,000/=</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>

</div>
@endsection