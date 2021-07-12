@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
                    
                    {{-- ajax --}}
                    {{-- <input type="button" onclick="printDiv('printableArea')" value="print" />
                    <script>
                        function printDiv(divName) {
                                    var printContents = document.getElementById(divName).innerHTML;
                                    var originalContents = document.body.innerHTML;

                                    document.body.innerHTML = printContents;

                                    window.print();

                                    document.body.innerHTML = originalContents;
                                }
                    </script> --}}
                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection