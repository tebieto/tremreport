<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'tremreports')}}</title>
        
		 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">]
	
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        <!-- Navigation -->
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6"></div>
        <div class="container">
            @yield('content')
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6"></div>
    
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/notify.min.js') }}"></script>

	<script>
	@if(Session::has('success'))
    $.notify("{{Session::get('success')}}", { position:"right top" });  
   @endif
	</script>
	
	</body>
</html>
