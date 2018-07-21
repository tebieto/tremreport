@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <form class="cuser">
        <div class="form-group col-sm-12">
            <label for="fullName" class="col-sm-2 control-label">Full Name</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="inputFullName" placeholder="Full Name">
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <label for="inputUsername" class="col-sm-2 control-label">Username</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="email" class="col-sm-2 control-label">Email</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="password" class="col-sm-2 control-label">Password</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>

        <div class="col-sm-8">
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
@endsection