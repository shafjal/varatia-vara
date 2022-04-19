@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">User Dashboard <span style="float:right">
            {{ $curentDay}},
            {{ $currentDate }}

        </span></h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">{{ $curentMonth }}`s Month Payable</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">30,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal"
                        data-target="#currentMonthPayment">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Total Paid</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">1,26,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal"
                        data-target="#totalPayment">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-danger text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;"></i>
                    <h5 class="text-right" style="margin-top: 1px">Previous Due</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">1,24,000/=</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal" data-target="#totalDue">View
                        Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Modal Total Paid-->
        <div class="modal fade" id="totalPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
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
                                    <th>Year</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-calendar-days"></i></td>
                                    <td>2018</td>
                                    <td>22000</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-calendar-days"></i></td>
                                    <td>2019</td>
                                    <td>24000</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-calendar-days"></i></td>
                                    <td>2020</td>
                                    <td>24000</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-calendar-days"></i></td>
                                    <td>2021</td>
                                    <td>26000</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-calendar-days"></i></td>
                                    <td>2022</td>
                                    <td>30000</td>
                                </tr>
                                <tr style="background-color: #94549c; color:whitesmoke">
                                    <td><i class="fa-solid fa-equals"></i></td>
                                    <td><strong><b>Total</b></strong></td>
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
        <!-- Modal Month Payable-->
        <div class="modal fade" id="currentMonthPayment" tabindex="-1" role="dialog"
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
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-house"></i></td>
                                    <td>House Rent</td>
                                    <td>22000</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-plug-circle-bolt"></i></td>
                                    <td>Electricty</td>
                                    <td>1500</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-fire-burner"></i></td>
                                    <td>Gas</td>
                                    <td>500</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-file-invoice"></i></td>
                                    <td>Service Charge</td>
                                    <td>3000</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-circle-dot"></i></td>
                                    <td>Other</td>
                                    <td>3000</td>
                                </tr>
                                <tr style="background-color: #94549c; color:whitesmoke">
                                    <td><i class="fa-solid fa-equals"></i></td>
                                    <td><strong><b>Total</b></strong></td>
                                    <td><strong><b>30,000</b></strong></td>
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
        <!-- Modal Previous-->
        <div class="modal fade" id="totalDue" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
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
                                    <th>Year</th>
                                    <th>Month</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-house"></i></td>
                                    <td>2018</td>
                                    <td>March</td>
                                    <td>22000</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-plug-circle-bolt"></i></td>
                                    <td>2018</td>
                                    <td>December</td>
                                    <td>22000</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-fire-burner"></i></td>
                                    <td>2019</td>
                                    <td>January</td>
                                    <td>24000</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><i class="fa-solid fa-file-invoice"></i></td>
                                    <td>2021</td>
                                    <td>March</td>
                                    <td>26000</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><i class="fa-solid fa-circle-dot"></i></td>
                                    <td>2022</td>
                                    <td>April</td>
                                    <td>30000</td>
                                </tr>
                                <tr style="background-color: #94549c; color:whitesmoke">
                                    <td><i class="fa-solid fa-equals"></i></td>
                                    <td colspan="2"><strong><b>Total</b></strong></td>
                                    <td><strong><b>30,000</b></strong></td>
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

    </div>
    {{-- Notice --}}
    <h5 class="mt-4 textColor">Notice From Owner</h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-md-8">
            <div class="card  text-white mb-4 myShadow">
                <div class="card-header noticeHeader">
                    <i class="fas fa-flag-checkered fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Notice</h5>
                </div>
                <div class="card-body noticeBody">
                    <h3 class="text-center"><u><b>Topic Name: Loren Ispum</b></u></h3>
                    <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                        to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</h4>
                </div>
                <div class="card-footer  justify-content-between noticeFooter">
                    <p style="color: black">Created At: 7.30 pm / Date: 25 /12/12</p>
                    {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Due List/Table Person current month --}}
    <div class="row">
        <div class="offset-md-4 offset-xl-4 col-xl-4 col-md-4">
            <div class="card mb-4 myShadow">
                <div class="card-header noticeHeader">
                    <i class="fa-brands fa-hire-a-helper"></i>
                    Action Section
                </div>
                <div class="card-body text-center">
                    <a href=""><button type="button" class="btn buttonCustomLogin">Send Message</button></a>
                    <a href=""><button type="button" class="btn buttonCustomLogin">Leave Notice</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection