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
        <div class="card-info"> <span class="card-title">{{$user->pname}}</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Editar</div>
            </button>
        </div>
         <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Seguidos</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Archivos</div>
            </button>
        </div>
       
    </div>

      <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
 
 
  <form class="form-horizontal" action=" " method="post"  id="reg_form">
    <fieldset>
      
      <!-- Form Name -->
      <legend> Informacion Personal </legend>
    
    </fieldset>
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Nombre</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="first_name" placeholder="Nombre" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label" >Apellidos</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="last_name" placeholder="Apellidos" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
    
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Telefono</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="phone" placeholder="(000)000-0000" class="form-control" type="text">
          </div>
        </div>
      </div>
      
           
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Ciudad</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="city" placeholder="Ciudad" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
      <!-- Select Basic -->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Estado</label>
        <div class="col-md-6 selectContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="state" class="form-control selectpicker" >
              <option value=" " >Porfavor selecciona tu estado</option>
              <option>Alabama</option>
              <option>Alaska</option>
              <option >Arizona</option>
              <option >Arkansas</option>
              <option >California</option>
              <option >Colorado</option>
              <option >Connecticut</option>
              <option >Delaware</option>
              <option >District of Columbia</option>
              <option> Florida</option>
              <option >Georgia</option>
              <option >Hawaii</option>
              <option >daho</option>
              <option >Illinois</option>
              <option >Indiana</option>
              <option >Iowa</option>
              <option> Kansas</option>
              <option >Kentucky</option>
              <option >Louisiana</option>
              <option>Maine</option>
              <option >Maryland</option>
              <option> Mass</option>
              <option >Michigan</option>
              <option >Minnesota</option>
              <option>Mississippi</option>
              <option>Missouri</option>
              <option>Montana</option>
              <option>Nebraska</option>
              <option>Nevada</option>
              <option>New Hampshire</option>
              <option>New Jersey</option>
              <option>New Mexico</option>
              <option>New York</option>
              <option>North Carolina</option>
              <option>North Dakota</option>
              <option>Ohio</option>
              <option>Oklahoma</option>
              <option>Oregon</option>
              <option>Pennsylvania</option>
              <option>Rhode Island</option>
              <option>South Carolina</option>
              <option>South Dakota</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option> Uttah</option>
              <option>Vermont</option>
              <option>Virginia</option>
              <option >Washington</option>
              <option >West Virginia</option>
              <option>Wisconsin</option>
              <option >Wyoming</option>
            </select>
          </div>
        </div>
      </div>
      
 
        <!-- Text area -->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Biografia </label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="comment" placeholder="Escribe algo acerca de ti"></textarea>
          </div>
        </div>
      </div>
      
     
       </fieldset>
       	<legend> Informacion Cuenta </legend>
        <fieldset>

      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Nombre Usuario</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="first_name" placeholder="Nombre usuario" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
        <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Correo</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" placeholder="Direccion de correo electronico" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
    
        <div class="form-group has-feedback">
            <label for="password"  class="col-md-4 control-label">
                    Contraseña
                </label>
                <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input class="form-control" id="userPw" type="password" placeholder="contraseña" 
                       name="password" data-minLength="5"
                       data-error="some error"
                       required/>
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
                </div>
             </div>
        </div>
     
        <div class="form-group has-feedback">
            <label for="confirmPassword"  class="col-md-4 control-label">
                  Confirmar Contraseña
                </label>
                 <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input class="form-control {$borderColor}" id="userPw2" type="password" placeholder="Confirmar Contraseña" 
                       name="confirmPassword" data-match="#confirmPassword" data-minLength="5"
                       data-match-error="some error 2"
                       required/>
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
      			 </div>
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
        <div class="tab-pane fade in" id="tab2">
          <h3>This is tab 2</h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      </div>
    </div>
    
    </div>
            

  

    
<form method="POST" action="{{ route('logout') }}">
  @csrf
  <button class="btn btn-danger">Salir</button>
</form>

	</section>
@endsection