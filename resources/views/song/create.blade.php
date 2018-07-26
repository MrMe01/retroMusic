@extends('layouts.home')

@section('title','RETROMUSIC')

@section('content')


	<section class="container">

		<div class="col-lg-16 col-sm-16">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="{{URL::asset('images/artista/retroMusic.jpg')}}">
          
        </div>
        <div class="useravatar">
            <img alt="" src="{{URL::asset('images/artista/Katy-Perry.jpg')}}">
        </div>
        <div class="card-info"> <span class="card-title"></span>

        </div>
    </div>
   

      <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
 
 
  <form class="form-horizontal" action="/song" method="POST"  id="reg_form">
  	@csrf
    <fieldset>
      
      <!-- Form Name -->
      <legend> Registrar Cancion </legend>
    
    </fieldset>




      <!-- Text input-->
      

		

      <div class="form-group">
        <label class="col-md-4 control-label">Nombre</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="name" placeholder="Nombre" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label" >Album</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="album" placeholder="Apellidos" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
    
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Genero</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="genero" placeholder="Ciudad" class="form-control"  type="text">
          </div>
        </div>
      </div>
      

                <!-- Select Basic -->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Tono</label>
        <div class="col-md-6 selectContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="tone" class="form-control selectpicker" >
              	<option>C</option>
              	<option>Cm</option>
				<option>C#</option>
              	<option>C#m</option>

              	<option>D</option>
              	<option>Dm</option>
				<option>D#</option>
              	<option>D#m</option>

				<option>E</option>
              	<option>Em</option>

              	<option>F</option>
              	<option>Fm</option>
				<option>F#</option>
              	<option>F#m</option>

				<option>G</option>
              	<option>Gm</option>
				<option>G#</option>
              	<option>G#m</option>

				<option>A</option>
              	<option>Am</option>
				<option>A#</option>
              	<option>A#m</option>

				<option>B</option>
              	<option>Bm</option>

            </select>
          </div>
        </div>
      </div>
           

 
        <!-- Text area -->
      


		<div class="form-group m-form__group row">
			<label class="col-md-4 control-label">Cancion</label>
			<div class="col-lg-6 col-md-9 col-sm-12">
				<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
				<textarea name="description" class="form-control" data-provide="markdown" rows="10" required="required"></textarea>			
				<span class="m-form__help">Escribe la tu canción</span>
			</div>
		</div>
       
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-warning" >Guardar Cambios <span class="glyphicon glyphicon-send"></span></button>
        </div>
      </div>
    </fieldset>
  </form>
        </div>
        
      </div>
    </div>
    
    </div>
            



	</section>

@stop