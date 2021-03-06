<!DOCTYPE html>
<html>
<head>
	<title>Retro Music - @yield('title')
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  href="{{URL::asset('css/principal.css')}}">
    <link rel="stylesheet"  href="{{URL::asset('css/rotating-card.css')}}">
     <link rel="stylesheet"  href="{{URL::asset('css/profile.css')}}">
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <script src="{{URL::asset('js/profile.js')}}"></script>

</head>
<body>
	
    @yield('content');


    <footer class="container-fluid text-center">
    	<div class="row">
    		<div class="col-sm-4">
    			<h3>Contactanos</h3>
    			<br>
    			<h4>Nuestra dirección e información de contacto aquí</h4>
    		</div>
    		<div class="col-sm-4">
    			<h3>Redes sociales</h3>
    			<a href="#" class="fa fa-facebook"></a>
    			<a href="#" class="fa fa-twitter"></a>
    			<a href="#" class="fa fa-google"></a>
    			<a href="#" class="fa fa-youtube"></a>
    		</div>
    		<div class="col-sm-4">
    			<br>
    			<img src="{{URL::asset('images/principal/logoNav.png')}}" class="icon">
    		</div>
    	</div>
    </footer>
	
</body>
</html>