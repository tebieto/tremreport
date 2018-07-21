@extends('layouts.app')
@section('content')

    @include('inc.navbar')
        <h3 class="page-header"><strong>G12 WEEKLY REPORTS</strong></h3>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <!-- "weekt" = week title, g12a = g12 attendance -->
                <form>
                <section class="sectiona"><strong><em>Fill in the numbers as in your branch register</em></strong>
                        <div class="form-group">
                                <label for="weekt">Week Title</label>
                                <input type="number" id="weekt" name="weekt" class="form-control" placeholder="eg: 1">
                        </div>
                    
                        <div class="form-group">
                                <label for="g12a">Attendance:</label>
                                <input type="number" id="g12a" name="g12a" class="form-control" placeholder="Number for this week">
                        </div>
                
                </section>
                
                <button type="button" class="btn btn-sm">SUBMIT</button>
                <button type="button" class="btn btn-sm btn-back"><a href="/dashboard">BACK</a></button>
            </form>
        </div>
@endsection