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
    @foreach ($notices as $notice)
    <div class="row justify-content-center">
        <div class="col-xl-8 col-md-8">
            <div class="card  text-white mb-4 myShadow">
                <div class="card-header noticeHeader">
                    <i class="fas fa-flag-checkered fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Notice Board</h5>
                </div>
                <div class="card-body noticeBody text-center">
                    <h3 class="text-center"><u><b>Topic Name: {{ $notice->topic_name }}</b></u></h3>
                    <h4>{{ $notice->topic_body }}</h4>
                </div>
                <div class="card-footer  noticeFooter">
                    <span style="float:left">
                        <h5>
                            @php
                            $dt = $notice->created_at;
                            $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
                            echo $dt->format('F j, Y, g:i a');
                            @endphp
                        </h5>
                    </span>
                    <span style="float:right">
                        <div class="row">
                            <div class=" col-md-3">
                                <form action="{{ route('notice.edit',$notice->id) }}" method="GET">
                                    @csrf
                                    @method('')
                                    <button type="submit" class="btn btn-success btn-sm"><i
                                            class="fa-solid fa-edit"></i></button>
                                </form>
                            </div>
                            <div class="offset-md-3 col-md-3">
                                <form action="{{ url('notice/'.$notice->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- Modal --}}
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
                <form class="form-group required" method="POST" action="{{ url('notice') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #A4BE9A">Topic Name</span>
                                </div>
                                <input id="topic_name" name="topic_name" type="text" class="form-control"
                                    aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="exampleFormControlTextarea1">Create Notice....</label>
                            <textarea name="topic_body" id="topic_body" class="form-control"
                                id="exampleFormControlTextarea1" rows="4" maxlength="200" required></textarea>
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