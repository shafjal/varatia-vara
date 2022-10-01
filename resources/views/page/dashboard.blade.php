@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Admin Dashboard {{ $currentAppt->apartment_name }}
        <span style="">
            {{-- Dropdown Searcch --}}

            <div class="btn-group dropright">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filter Building
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach ($apartment_all as $apartment_name)
                    <a class="dropdown-item" href="{{ route('home2',$apartment_name->id) }}">{{
                        $apartment_name->apartment_name }}</a>
                    @endforeach
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('selectDashboard') }}">Select Building</a>
                </div>
            </div>

        </span>
        <span style="float:right">
            {{ $curentDay}},
            {{ $currentDate }}
        </span>
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Current Balance</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">70,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal"
                        data-target="#viewdetails">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Current Due</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">70,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal"
                        data-target="#viewdetails">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;"></i>
                    <h5 class="text-right" style="margin-top: 1px">Previous Due</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">70,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal"
                        data-target="#viewdetails">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Miscellaneous</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{ $miscellaneous_cost }}/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal"
                        data-target=".miscellaneous_cost-modal-lg">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade miscellaneous_cost-modal-lg" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">List Of Possible Cost</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered table-hover " id="datatablesSimple">
                            <thead class="text-center bg-info">
                                <tr>
                                    <th>Created At</th>
                                    <th>Created By</th>
                                    <th>Task Name</th>
                                    <th>Apartment</th>
                                    <th>Floor/Flat</th>
                                    <th>Estimeted Cost</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($miscellaneous_all as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->task_name }}</td>
                                    <td>{{ $item->apartment_id }}</td>
                                    <td>{{ $item->apartment_floor }}</td>
                                    <td>{{ $item->will_amount }}</td>
                                </tr>
                                @endforeach
                                <tr style="background-color: #94549c; color:whitesmoke">
                                    <td><i class="fa-solid fa-equals"></i></td>
                                    <td colspan="4"><strong><b>Total</b></strong></td>
                                    <td><strong><b>{{ $miscellaneous_cost }}</b></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="color: red">***In word, {{ $word_convert }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Possible Cost List Current Month --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Miscellaneouses Cost List: <span style="background-color: yellow">{{ $curentMonth }}</span>
                    <span style="background-color: green; color:white">Total Tk:
                        {{ $miscellaneous_cost }}</span>
                    <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fas fa-plus-square me-1 float-right" style="font-size: 20px; color: Dodgerblue;">
                        </i>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Miscellaneous Cost</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('miscellaneous.store',$currentAppt->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="apartment_id" name="apartment_id">
                                                @foreach ($apartment_all as $item)
                                                <option value="{{ $item->apartment_name }}"> {{ $item->apartment_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <label class="control-label" for="inputApartmentId">Select Apartment</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="apartment_floor" type="text"
                                                name="apartment_floor" placeholder="Floor Number / Flat Number" />
                                            <label for="inputApartmentFloor">Floor Number / Flat Number</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="task_name" type="text" name="task_name"
                                                placeholder="Task Name" />
                                            <label for="inputTaskName">Task Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="will_amount" type="number"
                                                name="will_amount" placeholder="Estimated Cost" />
                                            <label for="inputEstimatedCost">Estimated Cost</label>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover " id="datatablesSimple">
                            <thead class="text-center bg-info">
                                <tr>
                                    <th>Created At</th>
                                    <th>Created By</th>
                                    <th>Task Name</th>
                                    <th>Apartment</th>
                                    <th>Floor/Flat</th>
                                    <th>Estimeted Cost</th>
                                    <th colspan="1">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($miscellaneous_all as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->task_name }}</td>
                                    <td>{{ $item->apartment_id }}</td>
                                    <td>{{ $item->apartment_floor }}</td>
                                    <td>{{ $item->will_amount }}</td>

                                    <td>
                                        <a title="Delete" href="{{ route('miscellaneous.destroy',$item->id) }}">
                                            @csrf<i class="fas fa-trash-alt" style="color: red"></i></a>
                                    </td>
                                    {{-- <td>
                                        <a href=""><i class="fas fa-edit" style="color: blue"></i></a>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Due List/Table Person current month --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Due of Sppecific Tenant Current Month: <span style="background-color: yellow">{{ $curentMonth
                        }}</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="datatablesSimple">
                            <thead class="text-center bg-info">
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Floor/Apt. Number</th>
                                    <th>Last Payment date</th>
                                    <th>Current Due</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>02 999 9999</td>
                                    <td>6B</td>
                                    <td>2011/04/25</td>
                                    <td>Tk 350000</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>02 888 8888</td>
                                    <td>8B</td>
                                    <td>2011/07/25</td>
                                    <td>Tk 70,750</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection