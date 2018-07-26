@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <form class="cbranch">
        <h3>CREATE A TREM EVENT</h3><hr>
        <div class="form-group col-sm-12">
            <label for="eventName" class="col-sm-2 control-label">Name Of Event</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
                <input type="text" class="form-control" id="inputEvent" placeholder="e.g Sunday School Service">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="eventDescription" class="col-sm-2 control-label">Description Of Event</label>                
            <div class="col-sm-6 input-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="fromDate" class="col-sm-2 control-label">From:</label>                
            <div class="col-sm-3 input-group">
                <input type="date" class="form-control" id="fromDate" placeholder="e.g From Date">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="toDate" class="col-sm-2 control-label">To:</label>                
            <div class="col-sm-3 input-group">
                <input type="date" class="form-control" id="toDate" placeholder="e.g To Date">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="eventBranch" class="col-sm-2 control-label">Select TREM Branch:</label>
            <div class="col-sm-6 input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <select name="eventBranch" class="form-control">
                <option value="none" selected disabled>-- Please choose one--</option>
                <option value="first">Headquarters</option> 
                <option value="second">Victoria Island</option>
                <option value="third">Akoka</option>
            </select>
            </div>
        </div>

        <div class="col-sm-8">
            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
@endsection