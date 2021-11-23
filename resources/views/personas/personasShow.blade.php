@extends('canvas')

@section('contenido')
        <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Información de {{$persona->nombre}}</h2>
                            {{-- <ol class="breadcrumb">
                                <li>
                                    <a href="{{ route('inicio') }}">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Blog</li>
                            </ol> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=====================================
=            Full Width Blog            =
======================================-->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                    <div class="table-responsive">
                        <!--<a href="post-fullwidth.html"><img class="img-responsive" src="recursosPlantilla/images/blog/post-1.jpg" alt="" /></a>-->
                        <a href="{{route('persona.index')}}"> Listado de Personas </a>
                        <ul>
                            <li>{{$persona->apellido_paterno}}</li>
                            <li>{{$persona->apellido_materno}}</li>
                            <li>{{$persona->identificador}}</li>
                            <li>{{$persona->telefono}}</li>
                            <li>{{$persona->correo}}</li>
                        </ul>

                        <a href="{{route('persona.edit',$persona)}}"> Editar </a>
                        <hr>
                        <form action = "{{route('persona.destroy', $persona)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Borrar">
                        </form>
                        <hr>
                        <h3>Archivo:</h3>
                        <h5>
                            <a href= "{{ route('descargar', $persona) }}">{{ $persona->archivo_original }}</a>
                        </h5>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="post-fullwidth.html">Este es el listado de todas las personas</a>
                        </h2>
                        <div class="blog-meta">
                            <span>Dec 11, 2020</span>
                            <span>by <a href="">Admin</a></span>
                            <span><a href="">business</a>,<a href="">people</a></span>
                        </div>
                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                        </p>
                        <a href="single-post.html" class="btn btn-dafault btn-details">Continue Reading</a>
                    </div>

                </article>
                <article class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                    <div class="blog-post-image">
                        <a href="post-fullwidth.html"><img class="img-responsive" src="recursosPlantilla/images/blog/post-2.jpg" alt="" /></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                        </h2>
                        <div class="blog-meta">
                            <span>Dec 11, 2020</span>
                            <span>by <a href="">Admin</a></span>
                            <span><a href="">business</a>,<a href="">people</a></span>
                        </div>
                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                        </p>
                        <a href="single-post.html" class="btn btn-dafault btn-details">Continue Reading</a>
                    </div>

                </article>
                <article class="wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">
                    <div class="blog-post-image">
                        <a href="post-fullwidth.html"><img class="img-responsive" src="recursosPlantilla/images/blog/post-3.jpg" alt="" /></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                        </h2>
                        <div class="blog-meta">
                            <span>Dec 11, 2020</span>
                            <span>by <a href="">Admin</a></span>
                            <span><a href="">business</a>,<a href="">people</a></span>
                        </div>
                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                        </p>
                        <a href="single-post.html" class="btn btn-dafault btn-details">Continue Reading</a>
                    </div>

                </article>
            </div>
        </div>
    </div>
</section>

@endsection
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
            Info de {{$persona->nombre}}
    </h1>
    <a href="{{route('persona.index')}}"> Listado de Personas </a>

    <ul>
        <li>{{$persona->apellido_paterno}}</li>
        <li>{{$persona->apellido_materno}}</li>
        <li>{{$persona->identificador}}</li>
        <li>{{$persona->telefono}}</li>
        <li>{{$persona->correo}}</li>
    </ul>

    <a href="{{route('persona.edit',$persona)}}"> Editar </a>
    <hr>
    <form action = "{{route('persona.destroy', $persona)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar">
    </form>

</body>
</html>
-->
