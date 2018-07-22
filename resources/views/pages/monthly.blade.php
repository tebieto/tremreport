@extends('layouts.app')
@section('content')
@include('inc.navbar')

        <h3 class="page-header"><strong>MONTHLY REPORTS</strong></h3>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <form>
            <section class="sectiona"><strong>SECTION A</strong>
                    <h6>Membership: <em>(Fill in the numbers as in your branch register)</em></h6>
                    <div class="form-group">	
                        <label for="adults">Adults:</label>
                        <input type="number" id="adult" name="adult" class="form-control" placeholder="Number Of Adults">
                    </div>
                    <div class="form-group">
                        <label for="children">Children:</label>
                        <input type="number" id="children" name="children" class="form-control" placeholder="Number Of Children">
                    </div>
                    <div class="form-group">
                        <label for="total">Total:</label>
                        <input type="number" id="total" name="total" class="form-control" placeholder="Total">
                    </div>
            </section>
            
            <section class="sectionb"><strong>SECTION B</strong>
                <h6><em>Ministries In Training, (MIT)</em></h6>
                    <div class="form-group">
                        <label for="tithers">Tithers:</label>
                            <input type="number" id="tithers" name="tithers" class="form-control" placeholder="Number Of Tithers">
                    </div>
            
                    <div class="form-group">
                        <label for="newmembers">New Members Received:</label>
                            <input type="number" id="newmembers" name="newmembers" class="form-control" placeholder="Number Of New Members">
                    </div>
            </section>
            
            <section class="sectionc"><strong>SECTION C</strong>
                <h6><em>Other Activities</em></h6>
                    <div class="form-group">
                        <label for="councilm">Council Meetings:</label>
                            <input type="number" id="councilm" name="councilm" class="form-control" placeholder="Number of council meetings held">
                    </div>
            
                    <div class="form-group">
                        <label for="speciala">Special Activities:</label>
                            <input type="number" id="speciala" name="speciala" class="form-control" placeholder="Number of special activities"><br>
                        <label for="specialac"><em>Comments</em></label>
                            <input type="text" id="specialac" name="specialac" class="form-control" placeholder="Comment on special activities">
                    </div>
                
                    <div class="form-group">
                        <label for="branchp">Branch Project:</label>
                            <input type="number" id="branchp" class="form-control" placeholder=" "><br>
                        <label for="branchpc"><em>Comments</em></label>
                            <input type="text" id="branchpc" name="branchpc" class="form-control" placeholder="Comment on branch projects on hand">
                    </div>
            </section>
            
            <section class="sectiond"><strong>SECTION D</strong>
                <h6><em>Group Membership</em></h6>
                    <div class="form-group">
                        <label for="cmf">Christian Men Fellowship:</label>
                            <input type="number" id="cmf" name="cmf" class="form-control" placeholder="Number of men members">
                    </div>
                
                    <div class="form-group">
                        <label for="cyf">Christian Youth Fellowship:</label>
                            <input type="number" id="cyf" name="cyf" class="form-control" placeholder="Number of youth members">
                    </div>
                
                    <div class="form-group">
                        <label for="cwf">Christian Women Fellowship:</label>
                            <input type="number" id="cwf" name="cwf" class="form-control" placeholder="Number of women members">
                    </div>
                    
                    <div class="form-group">
                        <label for="rc">Royal Children:</label>
                            <input type="number" id="rc" name="rc" class="form-control" placeholder="Number of children">
                    </div>
            </section>
            
            <section class="sectione"><strong>SECTION E</strong>
                <h6><em>G12 Reports</em></h6>
                    <div class="form-group">
                        <label for="newcells">New cells this month:</label>
                            <input type="number" id="newcells" name="newcells" class="form-control" placeholder="Number of new cells">
                    </div>
                    
                    <div class="form-group">
                        <label for="totalcn">Total number of cells:</label>
                            <input type="number" id="totalcn" name="totalcn" class="form-control" placeholder=" ">
                    </div>
            </section>
            
                <div class="col-sm-8">
                    <button type="button" class="btn btn-back pull-left"><a href="/">BACK</a></button>
                    <button class="btn btn-submit pull-right" type="submit">SUBMIT<i class="glyphicon glyphicon-send"></i></button>
                </div>
        </form>
        </div>

@endsection