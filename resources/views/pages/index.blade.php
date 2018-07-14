@extends('layouts.app')
@section('content')
    @include('inc.navbar')
    <div class="container">
        <div id="homepage">
            <div class="login">
                    <h1>SPIRITUAL REPORT</h1>
                    <hr>
                    <form method="post">
                        <input type="text" name="u" placeholder="Username" required="required" />
                        <input type="password" name="p" placeholder="Password" required="required" />
                        <button type="submit" class="btn btn-block btn-large">LOGIN</button>
                    </form>
            </div>
        </div>
    </div>
@endsection