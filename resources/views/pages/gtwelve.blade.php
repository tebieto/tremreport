@extends('layouts.app')
@section('content')
    @include('inc.navbar')
    <div class="main col-sm-6">
        <h3><strong>G12 WEEKLY REPORTS</strong></h3><hr>
            <!-- "weekt" = week title, g12a = g12 attendance -->
            <p><em>Fill in the numbers as in your branch register</em></p>
                <form class="gtwelve">
					<div class="form-group col-sm-12">
						<label for="weekt">Week Title:</label>
						<div class="col-sm-6 input-group">
							<input type="number" id="weekt" name="weekt" class="form-control" placeholder="eg: 1">
						</div>
					</div>
				
					<div class="form-group col-sm-12">
						<label for="gtwelvea">Attendance:</label>
						<div class="col-sm-6 input-group">
						<input type="number" id="gtwelvea" name="gtwelvea" class="form-control" placeholder="Number for this week">
						</div>
					</div>
			
					<div class="col-sm-6">
						<button type="button" class="btn btn-back pull-left"><a href="/">BACK</a></button>
						<button class="btn btn-submit pull-right" type="submit">SUBMIT<i class="glyphicon glyphicon-send"></i></button>
					</div>
                </form>
    </div>
@endsection