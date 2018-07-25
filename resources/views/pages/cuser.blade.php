@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <h3>CREATE AN ADMINISTRATIVE USER</h3><hr>
    <form class="cuser">
        <div class="form-group col-sm-12">
            <label for="userFullName" class="col-sm-2 control-label">Full Name</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="inputUserFullName" placeholder="Full Name">
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <label for="inputUserUsername" class="col-sm-2 control-label">Username</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                <input type="text" class="form-control" id="inputUserUsername" placeholder="Username">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="inputUserRole" class="col-sm-2 control-label">User Role</label>
            <div class="col-sm-6 input-group">
            <select name="userRole" class="form-control">
                <option value="first" selected>Admin</option> 
                <option value="second">Super Admin</option>
                <option value="third">Superior Admin</option>
            </select>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="userPhone" class="col-sm-2 control-label">Mobile Phone</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="number" class="form-control" id="inputUserPhone" placeholder="e.g 2348010000001">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="userEmail" class="col-sm-2 control-label">Email</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" id="inputUserEmail" placeholder="Email">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="userPassword" class="col-sm-2 control-label">Password</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="inputUserPassword" placeholder="Password">
            </div>
        </div>

        <div class="col-sm-8">
            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
@endsection