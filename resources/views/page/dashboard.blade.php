@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Dashboard <span style="float:right">
            {{ $curentDay}},
            {{ $currentDate }}

        </span></h5>
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
                    <a class="small text-white stretched-link" href="#">View Details</a>
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
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">

                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Previous Due</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">70,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">

                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Estimet Cost</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">70,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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
                    Possible Cost List: {{ $curentMonth }} <span style="background-color: green; color:white">Total Tk:
                        95,000</span>
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
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Possible Cost</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="text"
                                                placeholder="Task Name" />
                                            {{-- <label for="inputEmail">Task Name</label> --}}
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="text"
                                                placeholder="Location" />
                                            {{-- <label for="inputPassword">Amount</label> --}}
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="number"
                                                placeholder="Amount" />
                                            {{-- <label for="inputPassword">Amount</label> --}}
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover " id="datatablesSimple">
                            <thead class="text-center bg-info">
                                <tr>
                                    <th>Task Name</th>
                                    <th>Location</th>
                                    <th>Amount</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Roof/Tiles</td>
                                    <td>2B</td>
                                    <td>20000</td>
                                    <td>
                                        <a href=""><i class="fas fa-trash-alt" style="color: red"></i></a>
                                    </td>
                                    <td>
                                        <a href=""><i class="fas fa-edit" style="color: blue"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Wash Room</td>
                                    <td>4A</td>
                                    <td>75000</td>
                                    <td>
                                        <a href=""><i class="fas fa-trash-alt" style="color: red"></i></a>
                                    </td>
                                    <td>
                                        <a href=""><i class="fas fa-edit" style="color: blue"></i></a>
                                    </td>
                                </tr>

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
                    Due of Sppecific Tenant For Month: {{ $curentMonth }}
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
    {{-- Revenue Chart current month--}}
    <h5 class="mt-4 textColor text-center">
        Revenue Chart For Month: {{ $curentMonth }}
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="100%" height="20">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card myShadow">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @foreach ($admin as $user)
                    <ul id="printableArea">
                        <Li>Id = {{$user->id}}</Li>
                        <li>Name = {{$user->name}}</li>
                        <li>email = {{$user->email}}</li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- chartJavascript --}}
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
const myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'March', 'June', 'July', 'Aug'],
        datasets: [{
            label: 'Revenue:',
            data: [70000, 50000, 8000, 70000, 90000, 30000],
            backgroundColor: [
                '#ff6384',
                '#36a2eb',
                '#ffce56',
                '#4bc0c0',
                '#4bc0c0',
                '#ff9f40'
            ],
            borderColor: [
                '#ff6384',
                '#36a2eb',
                '#ffce56',
                '#4bc0c0',
                '#9966ff',
                '#ff9f40'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endsection