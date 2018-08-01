@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main" id="app">
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
            <tr v-for="download in allDownloads">
                <th scope="row">@{{download.id}}</th>
                <td>@{{download.name}}</td>
                <td>@{{download.year}}</th>
                <td>@{{download.description}}</td>
                <td ><a :href="download.url" style="background:#000; padding:5px; border-radius:50%;"><i class="glyphicon glyphicon-download-alt"></i></a></td>
            </tr>
            
        </tbody>
    </table>

    <div class="col-sm-12">
        <button type="button" class="btn btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
    </div>
</div>
@endsection