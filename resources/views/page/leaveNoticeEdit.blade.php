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
    <h5 class="mt-4 textColor">Edit Leave Notice
        {{-- <span style="float:right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-pen-square fa-1x " aria-hidden="true" style="float:left;"> Create</i>
            </button>
        </span> --}}
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}

    <div class="row justify-content-center">
        <div class="col-xl-8 col-md-8">
            <form class="form-group required" method="POST" action="{{ route('leave.update',$leave_notice_id->id) }}">
                @csrf
                <div class="card mb-4 myShadow">
                    <div class="card-body">
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
                                    aria-label="Amount (to the nearest dollar)"
                                    value="{{ $leave_notice_id->start_date }}">
                            </div>
                            <label class="label">
                                Select Start Date
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <input id="chkdate" disabled="disabled" name="end_date" type="date" class="form-control"
                                    aria-label="Amount (to the nearest dollar)"
                                    value="{{ $leave_notice_id->end_date }}">
                            </div>
                            <label class="label">
                                Select End Date
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="exampleFormControlTextarea1">Any Message</label>
                            <textarea name="any_message" id="topic_body" class="form-control"
                                id="exampleFormControlTextarea1" rows="4"
                                maxlength="200">{{ $leave_notice_id->any_message }}</textarea>
                            <label for="limit" class="control-label">(Charecter Limit - 200)</label>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button> --}}

                    </div>
                    <div class="modal-footer">
                        <a title="View" href="{{ route('leave.notice') }}" class="btn btn-secondary btn-sm">
                            <i class="fa-solid fa-backward"></i>
                            Back
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection