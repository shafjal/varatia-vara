@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Edit Notice
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
            <div class="card  text-white mb-4 myShadow">
                <div class="card-header noticeHeader">
                    <i class="fas fa-flag-checkered fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Edit Notice Board</h5>
                </div>
                <div class="card-body noticeBody">
                    <form class="form-group required" method="POST"
                        action="{{ route('notice.update',$notice_id->id) }}">
                        @csrf
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="background-color: #A4BE9A">Topic
                                            Name</span>
                                    </div>
                                    <input id="topic_name" name="topic_name" type="text" class="form-control"
                                        aria-label="Amount (to the nearest dollar)"
                                        value="{{ $notice_id->topic_name }}">
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="exampleFormControlTextarea1">Update Notice....</label>
                                <textarea name="topic_body" id="topic_body" class="form-control"
                                    id="exampleFormControlTextarea1" rows="4" maxlength="200" required>{{ $notice_id->topic_body }}
                                </textarea>
                                <label for="limit" class="control-label">(Charecter Limit - 200)</label>
                            </div>
                            <span style="float:right">

                                <a title="View" href="{{ url('/notice') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa-solid fa-backward"></i>
                                    Back
                                </a>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    {{ __('Submit') }}
                                </button>

                            </span>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection