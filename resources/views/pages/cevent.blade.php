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

        <div class="col-sm-8">
            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
@endsection