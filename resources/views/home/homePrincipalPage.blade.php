@extends('layouts.home')

@section('title','RETROMUSIC')

@section('content')


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0"class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"class="active"></li>
			<li data-target="#myCarousel" data-slide-to="2"class="active"></li>
			<li data-target="#myCarousel" data-slide-to="3"class="active"></li>
			<li data-target="#myCarousel" data-slide-to="4"class="active"></li>
		</ol>

		<div class="carousel-inner" role="listbox">

			<div class="item active">
			<img src="{{URL::asset('images/principal/imageHomeSlide2.jpg')}}">
			<div class="carousel-caption">
			<!--	<h1>THE BEST SONGS</h1>
				<br>
				<button type="button" class="btn btn-default">Ver mas</button>-->
			</div>
			</div> <!-- FIN DEL ACTIVE -->

			<div class="item">
              	<img src="{{URL::asset('images/principal/imageHomeSlide6.jpg')}}">
			</div>

			<div class="item">
              	<img src="{{URL::asset('images/principal/imageHomeSlide4.png')}}">
			</div>

			<div class="item">
              	<img src="{{URL::asset('images/principal/imageHomeSlide7.png')}}">
			</div>

			<div class="item">
              	<img src="{{URL::asset('images/principal/imageHomeSlide3.jpg')}}">
			</div>
		</div>

		<!-- CONTROL DEL SLIDER -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div> <!-- FIN DEL SLIDER -->

    <div class="container text-center">
    	<h2 id="titulo">¿QUE PUEDES HACER EN ESTA PAGINA?</h2>
    	<div class="row">
    		<div class="col-sm-4">
    			<img src="{{URL::asset('images/principal/consultImage.png')}}" id="icon">
    			<h3 id ="tituloIcon">CONSULTAR</h3>
    		</div>
    		<div class="col-sm-4">
    			<img src="{{URL::asset('images/principal/editImage.png')}}" id="icon">
    			<h3 id ="tituloIcon">EDITAR</h3>
    		</div>
    		<div class="col-sm-4">
    			<img src="{{URL::asset('images/principal/downloadsImage.png')}}" id="icon">
    			<h3 id ="tituloIcon">GUARDAR</h3>
    		</div>
    	</div>
    </div>

    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<h3 id="titulo-sm" >Expresa y aprovecha tu tiempo</h3>
    			<br><br>
    			<p>Las actividades artísticas fomentan tu capacidad de expresión.</p>
    			<p>Seguramente has escuchado de lo que significa hacer catarsis. Esta consiste en liberarte de dolores, preocupaciones y tristezas por medio de ejercicios que te invitan a reflexionar. Aprender a tocar un instrumento musical puede ser la manera de reconciliarte contigo mismo, traer nuevas energías a tu vida y descansar.</p>
    			
    		</div>
    		<div class="col-md-6">
    			<img src="{{URL::asset('images/principal/learn.jpg')}}" id="imgs" class="img-responsive">
    		</div>
    		
    	</div>
    </div>

      <div class="container">
    	<div class="row">
    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    			<h3 id="titulo-sm">ventajas de aprender por tu cuenta</h3>
    			<br><br>
    			<p>Las actividades artísticas fomentan tu capacidad de expresión.</p>
    			    			
    		</div>
    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    			<img src="{{URL::asset('images/principal/live-music.jpg')}}" id="imgs" class="img-responsive">
    		</div>

    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    			<h3 id="titulo-sm" >Crea tu propia version</h3>
    			<br><br>
    			<p>Las actividades artísticas fomentan tu capacidad de expresión.</p>
    			    			
    		</div>
    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    			<img src="{{URL::asset('images/principal/creative.jpg')}}" id="imgs" class="img-responsive">
    		</div>
    		
    	</div>
    </div>
    
@endsection