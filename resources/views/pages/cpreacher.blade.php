@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <h3>CREATE A PREACHER</h3><hr>
    <form class="cpreacher">
        <div class="form-group col-sm-12">
            <label for="preacherFullName" class="col-sm-2 control-label">Full Name</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="inputPreacherFullName" placeholder="Full Name">
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <label for="inputPreacherUsername" class="col-sm-2 control-label">Username</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                <input type="text" class="form-control" id="inputPreacherUsername" placeholder="Username">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="preacherPhone" class="col-sm-2 control-label">Mobile Phone</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="number" class="form-control" id="inputPreacherPhone" placeholder="e.g 2348010000001">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="preacherEmail" class="col-sm-2 control-label">Email</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" id="inputPreacherEmail" placeholder="Email">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="preacherBranch" class="col-sm-2 control-label">Select TREM Branch:</label>
            <div class="col-sm-6 input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <select name="preacherBranch" class="form-control">
                <option value="none" selected disabled>-- Please choose one--</option>
                <option value="first">Headquarters</option> 
                <option value="second">Victoria Island</option>
                <option value="third">Akoka</option>
            </select>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="preacherPassword" class="col-sm-2 control-label">Password</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="inputPreacherPassword" placeholder="Password">
            </div>
        </div>

        <div class="col-sm-8">
            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>  
    </form>
</div>
@endsection