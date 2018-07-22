@extends('layouts.app')
@section('content')
@include('inc.navbar')

        <h3 class="page-header"><strong>WEEKLY REPORTS</strong></h3>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            
            <form>	
            <!-- "wmen" = week's men, wchildren = week's children, etc - just to differenciate from same name in monthly reports -->
                <section class="sectiona"><strong>Weekly Attendance;<em>(Fill in the numbers as in your branch register)</em></strong>
                        <h6></h6>
                        <div class="form-group">	
                            <label for="date">Date:</label>
                            <input type="date" id="wdate" name="wdate" class="form-control" placeholder="Event date">
                        </div>
                        <div class="form-group">	
                            <label for="wevent">Event:</label>
                            <input type="text" id="wevent" name="wevent" class="form-control" placeholder="What kind of event was it? e.g.: Sunday Service, Power for living, etc.">
                        </div>
                        <div class="form-group">	
                            <label for="wmen">Men:</label>
                            <input type="number" id="wmen" name="wmen" class="form-control" placeholder="Number Of Men">
                        </div>
                        <div class="form-group">	
                            <label for="wwomen">Women:</label>
                            <input type="number" id="wwomen" name="wwomen" class="form-control" placeholder="Number Of Women">
                        </div>
                        <div class="form-group">
                            <label for="wchildren">Children:</label>
                            <input type="number" id="wchildren" name="wchildren" class="form-control" placeholder="Number Of Children">
                        </div>
                        <div class="form-group">
                            <label for="wtotal">Total:</label>
                            <input type="number" id="wtotal" name="wtotal" class="form-control" placeholder="Total">
                        </div>
                    
                        <div class="form-group">	
                            <label for="wpreacher">Preacher:</label>
                            <input type="text" id="wpreacher" name="wpreacher" class="form-control" placeholder="e.g: Bishop Mike Okonkwo">
                        </div>
                </section>
                <div class="col-sm-8">
                    <button type="button" class="btn btn-back pull-left"><a href="/">BACK</a></button>
                    <button class="btn btn-submit pull-right" type="submit">SUBMIT<i class="glyphicon glyphicon-send"></i></button>
                </div>
            </form>
        </div>
    </div> 
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6"></div>
@endsection