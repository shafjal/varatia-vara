@extends('layouts.app')
@section('content')
<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Messages <span style="float:right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-pen-square fa-1x " aria-hidden="true" style="float:left;"> Compose</i>
            </button>
        </span>
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">

    {{-- Incoming message --}}
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-envelope-square me-1"></i>
                    Messsage From:
                    <span style="background-color: green; color:white">Tiger Nixon</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Subject: Lorem Ipsum is simply dummy text</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                        to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</h6>
                </div>
                <div class="card-footer bg-info d-flex justify-content-end ">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                        data-target="#exampleModalCenterReply">
                        Reply
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-envelope-square me-1"></i>
                    Messsage From:
                    <span style="background-color: green; color:white">Tiger Nixon</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Subject: Lorem Ipsum is simply dummy text</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                        to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</h6>
                </div>
                <div class="card-footer bg-info d-flex justify-content-end ">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                        data-target="#exampleModalCenterReply">
                        Reply
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-envelope-square me-1"></i>
                    Messsage From:
                    <span style="background-color: green; color:white">Tiger Nixon</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Subject: Lorem Ipsum is simply dummy text</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                        to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</h6>
                </div>
                <div class="card-footer bg-info d-flex justify-content-end ">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                        data-target="#exampleModalCenterReply">
                        Reply
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-envelope-square me-1"></i>
                    Messsage From:
                    <span style="background-color: green; color:white">Tiger Nixon</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Subject: Lorem Ipsum is simply dummy text</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                        to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</h6>
                </div>
                <div class="card-footer bg-info d-flex justify-content-end ">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                        data-target="#exampleModalCenterReply">
                        Reply
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Modal -->
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
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01"
                                    style="background-color: #F19C93">Tenant</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Tiger Nixon - 6B</option>
                                <option value="2">Garrett Winters - 8B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #A4BE9A">Subject</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="exampleFormControlTextarea1">Message</label>
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
<div class="modal fade" id="exampleModalCenterReply" tabindex="-1" role="dialog"
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
                        <div class="input-group">
                            <input class="form-control" id="inputPassword" type="text" value="Tiger Nixon" readonly />
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #A4BE9A">Subject</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="exampleFormControlTextarea1">Message</label>
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

@endsection