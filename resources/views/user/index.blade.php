@extends('layouts.home')

@section('title','RETROMUSIC')

@section('content')

<!--CARDS -->
<section class="container">
<div class="card-group">

	@for ($i = 0; $i < count($usuarios); $i++)
        <!--PLATILLA DE CARD -->
         <div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{URL::asset('images/artista/retroMusic.jpg')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{URL::asset('images/artista/jimi-hendrix.jpg')}}"/>
                        </div>

                        <div class="content">
                            <div class="main">
                                <h3 class="name">{{$usuarios[$i]->name}}</h3>
                                <p class="profession">{{$usuarios[$i]->type}}</p>
                                <p class="text-center">{{$usuarios[$i]->biography}}</p>
                            </div>
                       </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"Infromación"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Descripción</h4>
                                <p class="text-center">{{$usuarios[$i]->pname}} {{$usuarios[$i]->lastname}}</p>
                                <p class="text-center">{{$usuarios[$i]->biography}}</p>
                                <p class="text-center">{{$usuarios[$i]->country}}</p>
                                <p class="text-center"> Géneros: Rock clásico, Rock psicodélico, Rock</p>

                              </div>
                        </div>
                        <div class="footer">
                            <div class="links text-center">
                                <a href="#" class="follow"><i id="fa" class="fa fa-heart fa-fw"></i></a>
                                <a href="#" class="search"><i id="fa" class="fa fa-file-text fa-fw"></i></a>
                                <a href="https://www.youtube.com/watch?v=TLV4_xaYynY" target="_blank" class="example"><i id="fa" class="fa fa-youtube fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!-- FIN PLATILLA DE CARD -->
    @endfor
    <div style="position: block;">
        {{$usuarios->render()}}
    </div>

</div>

</section>

<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>





@endsection