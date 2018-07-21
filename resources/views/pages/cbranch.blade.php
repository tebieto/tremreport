@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <form class="cbranch">
        <h3>CREATE A TREM BRANCH</h3><hr>
        <div class="form-group col-sm-12">
            <label for="country" class="col-sm-2 control-label">Country</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                <input type="text" class="form-control" id="inputCountry" placeholder="Country">
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <label for="state" class="col-sm-2 control-label">State</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                <input type="text" class="form-control" id="inputState" placeholder="State">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="city" class="col-sm-2 control-label">City</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" class="form-control" id="inputCity" placeholder="City">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="address" class="col-sm-2 control-label">Address</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                <input type="text" class="form-control" id="inputAddress" placeholder="ie, #15 Gerrard Street, Obanikoro">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="branchName" class="col-sm-2 control-label">Branch Name</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                <input type="text" class="form-control" id="inputBranchName" placeholder="Branch Name">
            </div>
        </div>

        <div class="col-sm-8">
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
@endsection