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
                            <h2>Formulario para {{isset($persona) ? 'Editar' : 'Crear'}} Cliente</h2>
                            {{-- <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--
==================================================
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Agregar Cliente</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                         consectetur adipisicing elit. Dolore, ea!
                    </p>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <p>Por favor corrige los siguientes errores</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="contact-form">
                        @if(isset($persona))
                            <form id="contact-form" action="{{route('persona.update', $persona)}}" method="POST">
                            @method('PATCH')
                        @else
                                <form id="contact-form" action="{{ route('persona.store') }}" method="POST"  enctype="multipart/form-data">
                        @endif
                            @csrf
                       <!--<form id="contact-form" method="#" action="#" role="form">-->

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Tu Nombre" class="form-control" name="nombre" id="name"  value="{{$persona->nombre ?? ''}}">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Tu Apellido Paterno" class="form-control" name="apellido_paterno" id="apellido_paterno"  value="{{$persona->apellido_paterno ?? ''}}">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Tu Apellido Materno" class="form-control" name="apellido_materno" id="apellido_materno"  value="{{$persona->apellido_materno ?? ''}}">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Tu identificador" class="form-control" name="identificador" id="identificador"  value="{{$persona->identificador ?? ''}}">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Tu teléfono" class="form-control" name="telefono" id="telefono"  value="{{$persona->telefono ?? ''}}">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Tu Correo" class="form-control" name="correo" id="correo" value="{{$persona->correo ?? ''}}">
                            </div>

                            {{--<label for="area_id">Area:</label>
                                <br>
                                <select name = "area_id[]" id="area_id" multiple>
                                @foreach ($areas as $area)
                                    <option value="{{ $area->id }}" {{ isset($persona) && array_search($area->id, $persona->areas->pluck('id')->toArray()) === false ? '' : 'selected' }} >
                                        {{ $area->nombre_area }}
                                    </option>
                                @endforeach
                            </select> --}}

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <select name = "area_id[]" id="area_id" class="form-control" multiple>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}" {{ isset($persona) && array_search($area->id, $persona->areas->pluck('id')->toArray()) === false ? '' : 'selected' }} >
                                            {{ $area->nombre_area }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="file" class="form-control" name="archivo">
                                <!--value="{{$persona->correo ?? ''}}"-->
                            </div>


                            {{-- <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                            </div> --}}

                            {{-- <div id="success" class="success">
                                Registro creado exitosamente :)
                            </div>

                            <div id="error" class="error">
                                Error de formulario :(
                            </div> --}}

                            {{-- <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit" id="submit" class="btn btn-default btn-send" value="Enviar"> --}}
                                <br><input type= "submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.

                    </p>
                    <div class="map">
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                        <!--<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=C.%20Hacienda%20de%20Tala%202527A,%20Colonia%20Oblatos,%2044720%20Guadalajara,%20Jal.+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/car-satnav-gps/">Sat Navs</a></iframe></div>-->
                        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=C.%20Hacienda%20de%20Tala%202527A,%20Colonia%20Oblatos,%2044720%20Guadalajara,%20Jal.+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/car-satnav-gps/">Sat Navs</a></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <p>support@themefisher.com<br>support@themefisher.com</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+07 052 245 022<br>+07 999 999 999</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario para {{isset($persona) ? 'Editar' : 'Crear'}} Personas</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form">
        @if(isset($persona))
            <form action="{{route('persona.update', $persona)}}" method="POST">
            @method('PATCH')
        @else
                <form action="{{ route('persona.store') }}" method="POST">
        @endif
            @csrf
            <label for="nombre">Nombre:</label>
            <br><input type="text" name="nombre"  value="{{$persona->nombre ?? ''}}" onfocus="this.value=''">
            <br><label for="apellido_paterno">Apellido Paterno:</label>
            <br><input type="text" name="apellido_paterno" onfocus="this.value=''" value="{{$persona->apellido_paterno ?? ''}}">
            <br><label for="apellido_materno">Apellido Materno:</label>
            <br><input type="text" name="apellido_materno" onfocus="this.value=''" value="{{$persona->apellido_materno ?? ''}}">
            <br>
            <label for="identificador">Identificador:</label><br>
            <input type="text" name="identificador" onfocus="this.value=''" value="{{$persona->identificador ?? ''}}">
            <br>
            <label for="telefono">Telefono:</label><br>
            <input type="text" name="telefono" id = "telefono" value="{{$persona->telefono ?? ''}}">
            <br>
            <label for="area_id">Area:</label>
            <br>
            <select name = "area_id[]" id="area_id" multiple>
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}" {{ isset($persona) && array_search($area->id, $persona->areas->pluck('id')->toArray()) === false ? '' : 'selected' }} >
                        {{ $area->nombre_area }}
                    </option>
                @endforeach
            </select>
            <br>
            <label for="correo">Correo:</label><br>
            <input type="text" name="correo" id = "correo" value="{{$persona->correo ?? ''}}">
            <br>
            <br><input type= "submit" value="Enviar">

        </form>
    <div class="form">
</body>
</html>
-->
