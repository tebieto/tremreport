@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <form class="cbranch">
        <h3>CREATE A DOWNLOAD</h3><hr>
        <div class="form-group col-sm-12">
            <label for="downloadName" class="col-sm-2 control-label">Item Name</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                <input type="text" class="form-control" id="inputDescription" placeholder="e.g MIT Manual">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="downloadYear" class="col-sm-2 control-label">For: Year</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <input type="date" class="form-control" id="inputYear" placeholder="e.g 2018">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="downloadDescription" class="col-sm-2 control-label">Brief Description</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <input type="text" class="form-control" id="inputDescription" placeholder="e.g Speak words of wisdom today...">
            </div>
        </div>

        <div class="col-sm-8">
            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
@endsection