@extends('layouts.home')

@section('title','RETROMUSIC')

@section('content')

<!--CARDS -->
<section class="container">
<div class="card-group">

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
                                <h3 class="name">Jimi Hendrix</h3>
                                <p class="profession">Guitarrista</p>
                                <p class="text-center">All Along the Watchtower
								Electric Ladyland · 1968</p>
                            </div>
                       </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"All Along the Watchtower"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Descripcion</h4>
                                <p class="text-center">Artista: Jimi Hendrix</p>
								<p class="text-center">Álbum: Electric Ladyland</p>
								<p class="text-center">Fecha de lanzamiento: 1968</p>
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

<div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{URL::asset('images/artista/retroMusic.jpg')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{URL::asset('images/artista/lana.jpg')}}"/>
                        </div>

                        <div class="content">
                            <div class="main">
                                <h3 class="name">Lana Del Rey</h3>
                                <p class="profession">Cantante</p>
                                <p class="text-center">Summertime Sadness</p>
                            </div>
                       </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"Summertime Sadness"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Descripcion</h4>
                                <p class="text-center">Artista: Lana Del Rey</p>
								<p class="text-center">Álbum: Born to Die</p>
								<p class="text-center">Fecha de lanzamiento:  2012</p>
                                <p class="text-center"> Géneros:  Pop</p>

                              </div>
                        </div>
                        <div class="footer">
                            <div class="links text-center">
                                <a href="#" class="follow"><i id="fa" class="fa fa-heart fa-fw"></i></a>
                                <a href="#" class="search"><i id="fa" class="fa fa-file-text fa-fw"></i></a>
                                <a href="https://www.youtube.com/watch?v=TdrL3QxjyVw" target="_blank" class="example"><i id="fa" class="fa fa-youtube fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->



<div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{URL::asset('images/artista/retroMusic.jpg')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{URL::asset('images/artista/Katy-Perry.jpg')}}"/>
                        </div>

                        <div class="content">
                            <div class="main">
                                <h3 class="name">Katy Perry</h3>
                                <p class="profession">Cantante</p>
                                <p class="text-center">Firework</p>
                            </div>
                       </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"Firework"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Descripcion</h4>
                                <p class="text-center">Artista: Katy Perry</p>
								<p class="text-center">Álbum: Teenage Dream</p>
								<p class="text-center">Fecha de lanzamiento:  2010</p>
                                <p class="text-center"> Géneros: Pop adolescente, Rock, Pop</p>

                              </div>
                        </div>
                        <div class="footer">
                            <div class="links text-center">
                                <a href="#" class="follow"><i id="fa" class="fa fa-heart fa-fw"></i></a>
                                <a href="#" class="search"><i id="fa" class="fa fa-file-text fa-fw"></i></a>
                                <a href="#" class="example"><i id="fa" class="fa fa-youtube fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->


<div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{URL::asset('images/artista/retroMusic.jpg')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{URL::asset('images/artista/madona.jpg')}}"/>
                        </div>

                        <div class="content">
                            <div class="main">
                                <h3 class="name">Madonna</h3>
                                <p class="profession">Cantante</p>
                                <p class="text-center">Hung Up</p>
                            </div>
                       </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"Hung Up"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Descripcion</h4>
                                <p class="text-center">Artista: Madonna</p>
								<p class="text-center">Álbum: Confessions on a Dance Floor</p>
								<p class="text-center">Fecha de lanzamiento: 2005</p>
                                <p class="text-center"> Géneros: Electropop, Pop</p>

                              </div>
                        </div>
                        <div class="footer">
                            <div class="links text-center">
                                <a href="#" class="follow"><i id="fa" class="fa fa-heart fa-fw"></i></a>
                                <a href="#" class="search"><i id="fa" class="fa fa-file-text fa-fw"></i></a>
                                <a href="#" class="example"><i id="fa" class="fa fa-youtube fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->

<div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{URL::asset('images/artista/retroMusic.jpg')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{URL::asset('images/artista/the_weeknd.jpg')}}"/>
                        </div>

                        <div class="content">
                            <div class="main">
                                <h3 class="name">The Weeknd</h3>
                                <p class="profession">Cantante</p>
                                <p class="text-center">Call Out My Name</p>
                            </div>
                       </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"Call Out My Name"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Descripcion</h4>
                                <p class="text-center">Artista: The Weeknd</p>
								<p class="text-center">Álbum: My Dear Melancholy</p>
								<p class="text-center">Fecha de lanzamiento: 2018</p>
                                <p class="text-center"> Géneros: R&B/soul</p>

                              </div>
                        </div>
                        <div class="footer">
                            <div class="links text-center">
                                <a href="#" class="follow"><i id="fa" class="fa fa-heart fa-fw"></i></a>
                                <a href="#" class="search"><i id="fa" class="fa fa-file-text fa-fw"></i></a>
                                <a href="#" class="example"><i id="fa" class="fa fa-youtube fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->


<div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{URL::asset('images/artista/retroMusic.jpg')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{URL::asset('images/artista/cristina.jpg')}}"/>
                        </div>

                        <div class="content">
                            <div class="main">
                                <h3 class="name">Christina Aguilera</h3>
                                <p class="profession">Cantante</p>
                                <p class="text-center">Genie In A Bottle</p>
                            </div>
                       </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"Genie In A Bottle"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Descripcion</h4>
                                <p class="text-center">Artista: Christina Aguilera</p>
								<p class="text-center">Álbum: Christina Aguilera</p>
								<p class="text-center">Fecha de lanzamiento: 1999</p>
                                <p class="text-center"> Géneros: Pop</p>

                              </div>
                        </div>
                        <div class="footer">
                            <div class="links text-center">
                                <a href="#" class="follow"><i id="fa" class="fa fa-heart fa-fw"></i></a>
                                <a href="#" class="search"><i id="fa" class="fa fa-file-text fa-fw"></i></a>
                                <a href="#" class="example"><i id="fa" class="fa fa-youtube fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->




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