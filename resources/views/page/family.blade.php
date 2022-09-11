@extends('layouts.app')
@section('content')

<script type='text/javascript'>
    function addFields(){
                // Generate a dynamic number of inputs
                var number = document.getElementById("member").value;
                // Get the element where the inputs will be added to
                var container = document.getElementById("container");
                // Remove every children it had before
                while (container.hasChildNodes()) {
                    container.removeChild(container.lastChild);
                }
                for (i=0;i<number;i++){
                    // Append a node with a random text
                    container.appendChild(document.createTextNode("Member " + (i+1)));
                    // Create an <input> element, set its type and name attributes
                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "member" + i;
                    container.appendChild(input);
                    // Append a line break 
                    container.appendChild(document.createElement("br"));
                }
            }
</script>
<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Enter Tenant Details </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class=" card myShadow border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-center font-weight-bold my-2">Tenant Registration</h3>
                </div>
                <div class="card-body">
                    <script type='text/javascript'>
                        function addFields(){
                                    // Generate a dynamic number of inputs
                                    var number = document.getElementById("member").value;
                                    // Get the element where the inputs will be added to
                                    var container = document.getElementById("container");
                                    // Remove every children it had before
                                    while (container.hasChildNodes()) {
                                        container.removeChild(container.lastChild);
                                    }
                                    for (i=0;i<number;i++){
                                        // Append a node with a random text
                                        container.appendChild(document.createTextNode("Family Member "+ (i+1) + '\xa0\xa0\xa0\xa0'));
                                        // Create an <input> element, set its type and name attributes
                                        var input = document.createElement("input");
                                        input.type = "text";
                                        input.name = "member" + i;
                                        container.appendChild(input);
                                        // Create an <input> element, set its type and name attributes
                                        container.appendChild(document.createTextNode('\xa0\xa0\xa0\xa0'+"Phone Number"+ '\xa0\xa0\xa0\xa0' ));
                                        var input = document.createElement("input");
                                        input.type = "text";
                                        input.name = "member" + i;
                                        container.appendChild(input);
                                        // Append a line break 
                                        container.appendChild(document.createElement("br"));
                                        container.appendChild(document.createElement("br"));
                                    }
                                }
                    </script>
                    <form class="form-group required">
                        <div class="form-floating mb-3">
                            <select class="form-control" id="religious" name="religious">
                                <option value="Islam" selected>Choose....</option>
                                @foreach ($tenats as $tenat)
                                <option value="{{ $tenat->id }}">{{ $tenat->name }} - {{ $tenat->phone }} - {{ "Abanil
                                    Apartment" }} - {{ "6B" }}</option>
                                @endforeach
                            </select>
                            <label class="control-label" for="inputEmargencyContactAddress">Maritial Status</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="member" type="text" class="form-control" name="member" required
                                autocomplete="member" autofocus placeholder="Tenant Name">
                            <label class="control-label" for="inputName">Add Multiple Row </label>
                            <div class="mb-3 mt-1 text-right">
                                {{-- <a class="btn btn-success btn-sm" href="#" id="filldetails" onclick="addFields()">
                                    <i class="fa-solid fa-circle-plus">Add Row</i>
                                </a> --}}
                                <a class="btn btn-success btn-sm" href="#" title="Add Row" id="filldetails"
                                    onclick="addFields()"><i class="fa-solid fa-circle-plus"></i> Add
                                    Row
                                </a>
                            </div>
                            <div id="container" />
                        </div>
                    </form>
                </div>
                <div class="card-footer ">
                    {{-- Submit Button --}}
                    <div class=" d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection