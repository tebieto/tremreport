@extends('layouts.app')
@section('content')
@include('inc.navbar')

<div class="main col-sm-9">
    <h3 class="page-header"><strong>MONTHLY REPORTS</strong></h3>
            <form class="monthly">
            <div class="form-group col-sm-12">
                <strong>SECTION A</strong>
                <h6>Membership: <em>(Fill in the numbers as in your branch register)</em></h6>
                <div class="col-sm-4">	
                    <label for="adults">Adults:</label>
                    <input type="number" id="adult" name="adult" class="form-control" placeholder="Number Of Adults">
                </div>
                <div class="col-sm-4">
                    <label for="children">Children:</label>
                    <input type="number" id="children" name="children" class="form-control" placeholder="Number Of Children">
                </div>
                <div class="col-sm-4">
                    <label for="total">Total:</label>
                    <input type="number" id="total" name="total" class="form-control" placeholder="Total">
                </div>
            </div>
            
            <div class="form-group col-sm-12">
                <strong>SECTION B</strong>
                <h6><em>Ministries In Training, (MIT)</em></h6>
                <div class="col-sm-6">
                    <label for="tithers">Tithers:</label>
                    <input type="number" id="tithers" name="tithers" class="form-control" placeholder="Number Of Tithers">
                </div>
            
                <div class="col-sm-6">
                    <label for="newmembers">New Members Received:</label>
                    <input type="number" id="newmembers" name="newmembers" class="form-control" placeholder="Number Of New Members">
                </div>
            </div>
            
            <div class="form-group col-sm-12">
                <strong>SECTION C</strong>
                <h6><em>Other Activities</em></h6>
                <div class="col-sm-4">
                    <label for="councilm">Council Meetings:</label>
                    <input type="number" id="councilm" name="councilm" class="form-control" placeholder="Number of council meetings held">
                </div>
            
                <div class="col-sm-4">
                    <label for="speciala">Special Activities:</label>
                        <input type="number" id="speciala" name="speciala" class="form-control" placeholder="Number of special activities"><br>
                    <label for="specialac"><em>Comment on Activity</em></label>
                        <input type="text" id="specialac" name="specialac" class="form-control" placeholder="Comment on special activities">
                </div>
                
                <div class="col-sm-4">
                    <label for="branchp">Branch Project:</label>
                        <input type="number" id="branchp" class="form-control" placeholder=" "><br>
                    <label for="branchpc"><em>Comment on project</em></label>
                        <input type="text" id="branchpc" name="branchpc" class="form-control" placeholder="Comment on branch projects on hand">
                </div>
            </div>
            
            <div class="form-group col-sm-12">
                <strong>SECTION D</strong>
                <h6><em>Group Membership</em></h6>
                <div class="col-sm-3">
                    <label for="cmf">Christian Men Fellowship:</label>
                    <input type="number" id="cmf" name="cmf" class="form-control" placeholder="Number of men members">
                </div>
                
                <div class="col-sm-3">
                    <label for="cyf">Christian Youth Fellowship:</label>
                    <input type="number" id="cyf" name="cyf" class="form-control" placeholder="Number of youth members">
                </div>
                
                <div class="col-sm-3">
                    <label for="cwf">Christian Women Fellowship:</label>
                    <input type="number" id="cwf" name="cwf" class="form-control" placeholder="Number of women members">
                </div>
                
                <div class="col-sm-3">
                    <label for="rc">Royal Children Department:</label>
                    <input type="number" id="rc" name="rc" class="form-control" placeholder="Number of children">
                </div>
            </div>
            
            <div class="form-group col-sm-12">
                <strong>SECTION E</strong>
                <h6><em>G12 Reports</em></h6>
                <div class="col-sm-6">
                    <label for="newcells">New cells this month:</label>
                    <input type="number" id="newcells" name="newcells" class="form-control" placeholder="Number of new cells">
                </div>
                
                <div class="col-sm-6">
                    <label for="totalcn">Total number of cells:</label>
                    <input type="number" id="totalcn" name="totalcn" class="form-control" placeholder=" ">
                </div>
            </div>
            
            <div class="col-sm-12">
                <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-chevron-previous"></i><a href="/">BACK</a></button>
                <button class="btn btn-submit pull-right" type="submit">SUBMIT<i class="glyphicon glyphicon-send"></i></button>
            </div>
        </form>
    </div>
@endsection