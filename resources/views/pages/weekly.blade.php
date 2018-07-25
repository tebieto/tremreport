@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <h3><strong>WEEKLY REPORTS</strong></h3><hr>
        <form class="weekly">	
        <!-- "wmen" = week's men, wchildren = week's children, etc - just to differenciate from same name in monthly reports -->
            <p><strong>Weekly Attendance;<em>(Fill in the numbers as in your branch register)</em></strong></p>
                <div class="form-group col-sm-6">
                    <label for="date">Date:</label>
                    <div class="col-sm-6 input-group">	
                        <input type="date" id="wdate" name="wdate" class="form-control" placeholder="Event date">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="wevent">Event:</label>
                    <div class="col-sm-6 input-group">	
                        <input type="text" id="wevent" name="wevent" class="form-control" placeholder="What kind of event was it? e.g.: Sunday Service, Power for living, etc.">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="wmen">Men:</label>
                    <div class="col-sm-6 input-group">	
                        <input type="number" id="wmen" name="wmen" class="form-control" placeholder="Number Of Men">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="wwomen">Women:</label>
                    <div class="col-sm-6 input-group">	
                        <input type="number" id="wwomen" name="wwomen" class="form-control" placeholder="Number Of Women">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="wchildren">Children:</label>
                    <div class="col-sm-6 input-group">
                        <input type="number" id="wchildren" name="wchildren" class="form-control" placeholder="Number Of Children">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="wtotal">Total:</label>
                    <div class="col-sm-6 input-group">
                        <input type="number" id="wtotal" name="wtotal" class="form-control" placeholder="Total">
                    </div>
                </div>
                
                <div class="form-group col-sm-6">
                    <label for="wpreacher">Preacher:</label>    
                    <div class="col-sm-6 input-group">
                        <input type="text" id="wpreacher" name="wpreacher" class="form-control" placeholder="e.g: Bishop Mike Okonkwo">
                    </div>
                </div>
            

            <div class="col-sm-8">
                <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
                <button class="btn btn-submit pull-right" type="submit">SUBMIT<i class="glyphicon glyphicon-send"></i></button>
            </div>
        </form>
        </div>
@endsection