@extends('layouts.app')
@section('content')


<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Assign Tenant To Apartment </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class=" card myShadow border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-center font-weight-bold my-2">Add Tenant To Apartment</h3>
                </div>
                <div class="card-body">

                    <form class="form-group required">
                        {{-- <div class="form-floating mb-3">
                            <input id="tenant_name" type="text" class="form-control" name="tenant_name" required
                                autocomplete="tenant_name" autofocus placeholder="" disabled>
                            <label class="control-label" for="inputName"> Tenant Name</label>
                        </div> --}}
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover " id="datatablesSimple">
                                <thead class="text-center bg-info">
                                    <tr>
                                        <th>Created At</th>
                                        <th>Created By</th>
                                        <th>Task Name</th>
                                        <th>Apartment</th>
                                        <th>Floor/Flat</th>
                                        <th>Estimeted Cost</th>
                                        <th>Estimeted Cost</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>
                                            <input id="tenant_name" type="text" class="form-control" name="tenant_name"
                                                required autocomplete="tenant_name" autofocus placeholder="" disabled
                                                value="10000">
                                        </td>
                                        <td>
                                            <input id="tenant_name" type="text" class="form-control" name="tenant_name"
                                                required autocomplete="tenant_name" autofocus placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>
                                            <input id="tenant_name" type="text" class="form-control" name="tenant_name"
                                                required autocomplete="tenant_name" autofocus placeholder="" disabled
                                                value="10000">
                                        </td>
                                        <td>
                                            <input id="tenant_name" type="text" class="form-control" name="tenant_name"
                                                required autocomplete="tenant_name" autofocus placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>sds</td>
                                        <td>
                                            <input id="tenant_name" type="text" class="form-control" name="tenant_name"
                                                required autocomplete="tenant_name" autofocus placeholder="" disabled
                                                value="10000">
                                        </td>
                                        <td>
                                            <input id="tenant_name" type="text" class="form-control" name="tenant_name"
                                                required autocomplete="tenant_name" autofocus placeholder="">
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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