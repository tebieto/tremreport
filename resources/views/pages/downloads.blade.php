@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <table class="table table-striped">
    <h3>DOWNLOADS SECTION</h3><hr>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item</th>
                <th scope="col">Year</th>
                <th scope="col">Description</th>
                <th scope="col">Fast Download</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Gtwelve Manual</td>
                <td>2018</th>
                <td>Official manual of the TREM-g12 network</td>
                <td><i class="glyphicon glyphicon-download-alt"></i></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Royal Children's Church Manual</td>
                <td>2018</th>
                <td>Children's teacher manual</td>
                <td><i class="glyphicon glyphicon-download-alt"></i></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Daily Devotion</td>
                <td>2018</th>
                <td>Personal daily meditation</td>
                <td><i class="glyphicon glyphicon-download-alt"></i></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Daily Confession</td>
                <td>2018</th>
                <td>Speak powerful words to your day</td>
                <td><i class="glyphicon glyphicon-download-alt"></i></td>
            </tr>
        </tbody>
    </table>

    <div class="col-sm-12">
        <button type="button" class="btn btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
    </div>
</div>
@endsection