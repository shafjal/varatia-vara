@extends('layouts.app')

@section('content')

<script type="text/javascript">
    function EnableDisableTextBox() {
        var chkYes = document.getElementById("chkYes");
        var txtPassportNumber = document.getElementById("chkdate");
        chkdate.disabled = chkYes.checked ? false : true;
        // if (!chkdate.disabled) {
        //     chkdate.focus();
        // }
    }
</script>

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Leave Notice<span style="float:right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-pen-square fa-1x " aria-hidden="true" style="float:left;"> Create</i>
            </button>
        </span>
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    @if (session('success-update'))
    <div class="alert alert-custom alert-dismissible fade show" role="alert">
        <strong>{{ session('success-update')}}</strong>
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
    @if (session('success-delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('success-delete')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-xl-8 col-md-8">
            @foreach ($leave_notices as $leave_notice)
            <div class="card  text-white mb-4 myShadow">
                <div class="card-header noticeHeader">
                    <i class="fas fa-flag-checkered fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Leave Notice</h5>
                </div>
                <div class="card-body noticeBody">
                    <div class="row">
                        {{-- Start Date --}}
                        <div class="col-md-6">
                            <div class="card text-white bg-primary">
                                <div class="card-header text-center">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    Leave Start From
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">
                                        {{ $leave_notice->start_date }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        {{-- End Date --}}
                        <div class="col-md-6">
                            <div class="card text-white bg-secondary">
                                <div class="card-header text-center">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    Leave End
                                </div>
                                <div class="card-body text-center">
                                    @if (is_null($leave_notice->end_date))
                                    <h5 class="card-title"> Parmantly Leave</h5>
                                    @else
                                    <h5 class="card-title"> {{$leave_notice->end_date}}</h5>
                                    @endif

                                </div>
                            </div>
                        </div>
                        {{-- Details --}}
                        {{-- Name --}}
                        <div class="col-md-4 mt-3">
                            <div class="card text-white" style="background-color: rgb(153, 31, 153)">
                                <div class="card-header text-center">
                                    <i class="fa-solid fa-signature"></i>
                                    Name:
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-title">{{ "Kh. Afjal Hossen" }}</p>
                                </div>
                            </div>
                        </div>
                        {{-- Apartment Hold --}}
                        <div class="col-md-4 mt-3">
                            <div class="card text-white" style="background-color: rgb(153, 31, 153)">
                                <div class="card-header text-center">
                                    <i class="fa-solid fa-building-user"></i>
                                    Apartment Hold:
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-title">{{ "Abanil - 6B" }}</p>
                                </div>
                            </div>
                        </div>
                        {{-- Apartment Hold --}}
                        <div class="col-md-4 mt-3">
                            <div class="card text-white" style="background-color: rgb(153, 31, 153)">
                                <div class="card-header text-center">
                                    <i class="fa-solid fa-money-bill"></i>
                                    Any Due:
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-title">{{ "0/=" }}</p>
                                </div>
                            </div>
                        </div>
                        {{-- Apartment Hold --}}
                        <div class="col-md-12 mt-3">
                            <div class="card text-white" style="background-color:rgb(160, 157, 157)">
                                <div class="card-header ">
                                    <i class="fa-solid fa-message"></i>
                                    Any Message:
                                </div>
                                <div class="card-body">
                                    @if (is_null($leave_notice->any_message))
                                    <p class="card-title">{{ "No Message From Tenant" }}</p>
                                    @else
                                    <p class="card-title">{{ $leave_notice->any_message }}</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer  noticeFooter">
                    <span style="float:left">
                        <h5>
                            @php
                            // $dt = $notice->created_at;
                            // $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
                            // echo $dt->format('F j, Y, g:i a');
                            @endphp
                        </h5>
                    </span>
                    <span style="float:right">
                        <div class="row">
                            <div class="col-md-3">
                                <div class=" col-md-3">
                                    <a href="{{ route('leave.edit',$leave_notice->id) }}"
                                        class="btn btn-success btn-sm">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="offset-md-3 col-md-3">
                                <form action="{{ route('leave.destroy',$leave_notice->id) }}" method="POST">
                                    @csrf
                                    @method('')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitleReply" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Leave Notice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-group required" method="POST" action="{{ route('leave.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group form-check">
                                        <input class="form-check-input" type="radio" id="chkYes" name="chk_status"
                                            onclick="EnableDisableTextBox()" value="Temporary" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Temporary
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-check">
                                        <input class="form-check-input" type="radio" id="chkNo" name="chk_status"
                                            onclick="EnableDisableTextBox()" value="Permantly" checked>
                                        <label class="form-check-label" for="chkNo">
                                            Permantly
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <input id="start_date" name="start_date" type="date" class="form-control"
                                    aria-label="Amount (to the nearest dollar)">
                            </div>
                            <label class="label">
                                Select Start Date
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <input id="chkdate" disabled="disabled" name="end_date" type="date" class="form-control"
                                    aria-label="Amount (to the nearest dollar)">
                            </div>
                            <label class="label">
                                Select End Date
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="exampleFormControlTextarea1">Any Message</label>
                            <textarea name="any_message" id="topic_body" class="form-control"
                                id="exampleFormControlTextarea1" rows="4" maxlength="200"></textarea>
                            <label for="limit" class="control-label">(Charecter Limit - 200)</label>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button> --}}

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection