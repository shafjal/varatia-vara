@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Notice Board <span style="float:right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-pen-square fa-1x " aria-hidden="true" style="float:left;"> Create</i>
            </button>
        </span>
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-xl-8 col-md-8">
            <div class="card  text-white mb-4 myShadow">
                <div class="card-header noticeHeader">
                    <i class="fas fa-flag-checkered fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Notice Board</h5>
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
                <div class="card-footer d-flex align-items-center justify-content-between noticeFooter">
                    <a class="small text-white stretched-link" href="#" data-toggle="modal"
                        data-target="#viewdetails"><span style="color: black">7.30 pm / Date: 25 /12
                            /12</span></a><span><i style="color: red" class="fas fa-trash"></i></span>
                    {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitleReply" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #A4BE9A">Topic Name</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="exampleFormControlTextarea1">Create Notice....</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="100"
                                required></textarea>
                            <label for="limit">(Charecter Limit - 100)</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection