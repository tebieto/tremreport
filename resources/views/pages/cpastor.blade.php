@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <h3>CREATE A PASTOR</h3><hr>
    <form class="cpastor">
        <div class="form-group col-sm-12">
            <label for="pastorFullName" class="col-sm-2 control-label">Full Name</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="inputPastorFullName" placeholder="Full Name">
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <label for="inputPastorUsername" class="col-sm-2 control-label">Username</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                <input type="text" class="form-control" id="inputPastorUsername" placeholder="Username">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="pastorPhone" class="col-sm-2 control-label">Mobile Phone</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="number" class="form-control" id="inputPastorPhone" placeholder="e.g 2348010000001">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="pastorEmail" class="col-sm-2 control-label">Email</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" id="inputPastorEmail" placeholder="Email">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="pastorBranch" class="col-sm-2 control-label">Pastor's Branch</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                <input type="text" class="form-control" id="inputPastorBranch" placeholder="Select Pastor's Branch">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="pastorPassword" class="col-sm-2 control-label">Password</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="inputPastorPassword" placeholder="Password">
            </div>
        </div>

        <div class="col-sm-8">
            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
@endsection