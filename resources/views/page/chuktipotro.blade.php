@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h3 class="mt-4 textColor">Contract Papaer

        <span style="float:right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createChuktipotro">
                <i title="Create New Paper" class="fas fa-pen-square fa-1x " aria-hidden="true" style="float:left;">
                    Create</i>
            </button>
        </span>

    </h3>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fa-solid fa-file-signature"></i>
                    Automated Contract Paper List
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover " id="datatablesSimple">
                            <thead class="text-center bg-info">
                                <tr>
                                    <th>Advanced Payment Date</th>
                                    <th>Tenant Name</th>
                                    <th>Phone</th>
                                    <th>Apartment Hold</th>
                                    <th>Flat Hold</th>
                                    <th>Advanced Amount</th>
                                    <th colspan="4">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>21-April-2022</td>
                                    <td>Mark Otto</td>
                                    <td>0171777777</td>
                                    <td>Abanil Apartment</td>
                                    <td>6B</td>
                                    <td>10,000 Tk</td>
                                    <td>
                                        <a title="View" href="{{ route('chuktipotro.print') }}">
                                            <i class="fas fa-eye" style="color: green"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a title="Print it" href="" data-toggle="modal"
                                            data-target="#exampleModalCenter">
                                            <i class="fa-solid fa-print"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a title="Edit" href=""><i class="fas fa-edit" style="color: blue"></i></a>
                                    </td>
                                    <td>
                                        <a title="Delete" href=""><i class="fas fa-trash-alt"
                                                style="color: red"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="createChuktipotro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Contract</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-group required">
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Apartment</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose ....</option>
                                    <option value="1">Abanil Apartment</option>
                                    <option value="2">Jahanara Monjil</option>
                                    <option value="3">Trinoyona</option>
                                </select>
                            </div>
                            <label class="control-label " for="inputEmail">Select Apartment</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Tenant</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose ....</option>
                                    <option value="1">Mark Otto</option>
                                    <option value="2">Jacob Thornton</option>
                                    <option value="3">Larry Larry</option>
                                </select>
                            </div>
                            <label class="control-label " for="inputEmail">Select Tenant</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Date</label>
                                </div>
                                <input id="" type="date" class="form-control" name="" required autocomplete="" autofocus
                                    placeholder="">
                            </div>
                            <label class="control-label " for="inputEmail">In which month will you get up in the
                                flat?</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Payable</label>
                                </div>
                                <input id="" type="text" class="form-control" name="" required autocomplete="" autofocus
                                    placeholder="Ex:20000">
                            </div>
                            <label class="control-label " for="inputEmail">Home/Flat Rent</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Paid</label>
                                </div>
                                <input id="" type="text" class="form-control" name="" required autocomplete="" autofocus
                                    placeholder="Ex:10000 / 20000">
                            </div>
                            <label class="control-label " for="inputEmail">Advance Payment</label>
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
</div>


@endsection