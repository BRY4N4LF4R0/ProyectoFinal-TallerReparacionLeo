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
                            <h2>Listado de Clientes</h2>
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
                        <table border="1">
                            <thead>
                                <th>Area(s)</th>
                                <th>ID</th>
                                <th>Usuario Admin</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Codigo</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                            </thead>
                            <tbody>
                                @foreach ($personas as $persona )
                                    <tr>
                                        <td>
                                            <ul>
                                                @foreach ($persona->areas as $area)
                                                    <li>{{ $area->nombre_area }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="{{route('persona.show',$persona->id)}}">
                                                 {{ $persona->id}}
                                            <a>
                                        </td>
                                        <td>{{ $persona->user->name }} ({{ $persona->user->email }})</td>
                                        <td>{{ $persona->nombre}}</td>
                                        <td>{{ $persona->apellido_paterno}}</td>
                                        <td>{{ $persona->apellido_materno}}</td>
                                        <td>{{ $persona->identificador}}</td>
                                        <td>{{ $persona->correo}}</td>
                                        <td>{{ $persona->telefono}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="post-fullwidth.html">Este es el listado de todos los clientes</a>
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
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Personas</h1>

    <table border="1">
        <thead>
            <th>ID</th>
            <th>Usuario Admin</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Codigo</th>
            <th>Correo</th>
            <th>Telefono</th>
        </thead>
        <tbody>
            @foreach ($personas as $persona )
                <tr>
                    <td>
                        <a href="{{route('persona.show',$persona->id)}}">
                             {{ $persona->id}}
                        <a>
                    </td>
                    <td>{{ $persona->user->name }} ({{ $persona->user->email }})</td>
                    <td>{{ $persona->nombre}}</td>
                    <td>{{ $persona->apellido_paterno}}</td>
                    <td>{{ $persona->apellido_materno}}</td>
                    <td>{{ $persona->identificador}}</td>
                    <td>{{ $persona->correo}}</td>
                    <td>{{ $persona->telefono}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
-->
