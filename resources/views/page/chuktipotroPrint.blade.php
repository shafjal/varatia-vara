@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Contract Paper
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-xl-8 col-md-8">
            <div class="card  text-white mb-4 myShadow">
                <div class="card-header noticeHeader">
                    <i class="fa-solid fa-file-signature fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px"><a href=><i class="fa-solid fa-print fa-2x myShadow2"
                                style="color:black;"></i></a></h5>
                </div>
                <div class="card-body noticeBody">
                    <h3 class="text-center"><u><b>Contract Paper</b></u></h3>
                    <h6 class="text-center"><u><b>Owner Copy</b></u></h6>
                    <h4 class="mb-4">20-Apr-2022, I have reacive advance money
                        from jim Hopper for Apartment: Abanil Apartment, Flat: 6B. The actual rent will be increase
                        after two years. He/She was insure that he will follow the generale rules of home rent. From the
                        next Month:August, he will live at Abanil Apartment, Flat: 6B.
                    </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p class=""> <strong> <b>signature:</b></strong></p>
                            <hr style="width:60%;text-align:left;margin-left:0; border: 1px solid black;">
                            <h5> Jim Hoper <span style="color: blue"> (Tenant)</span>
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <hr style="border: 1px solid rgb(184, 109, 109);width:100%;">
                    </div>
                    <h3 class="text-center mt-1"><u><b>Contract Paper</b></u></h3>
                    <h6 class="text-center"><u><b>Tenant Copy</b></u></h6>
                    <h4 class="mb-4">20-Apr-2022, I have reacive advance money
                        from jim Hopper for Apartment: Abanil Apartment, Flat: 6B. The actual rent will be increase
                        after two years. He/She was insure that he will follow the generale rules of home rent. From the
                        next Month:August, he will live at Abanil Apartment, Flat: 6B.</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <p class=""> <strong><b>signature:</b></strong></p>
                            <hr class="" style="width:60%;margin-left:0; border: 1px solid black;text-align:right;">
                            <h5 class=""> Nancy Willer <span style="color: blue"> (Owner)</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection