@extends('canvas')

@section('contenido')

<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">
                    <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                        <span>Tu mejor solución para reparar</span><br>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Celulares</b>
                            <b>Computadoras</b>
                            <b>Cualquier dispositivo electrónico</b>
                        </span>
                        </h1>
                        </section> <!-- cd-intro -->
                        <!-- /.slider -->
                        <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                            Contamos con 10 años de experiencia reparando tus dispositivos electrónicos que respaldan nuestro trabajo <br> Puedes tener tu dispositivo reparado con calidad y rapidez con la seguridad de que lo cuidaremos.
                        </h2>
                        <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works">Ver Servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#main-slider-->

    <!--
    ==================================================
    About Section Start
    ================================================== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                        <h2>
                            ACERCA DE NOSOTROS
                        </h2>
                        <p>
                            Somos una empresa 100% mexicana especializados en la reparación de dispositivos electrónicos.
                        </p>
                         <p>
                            Contamos con proveedores directamente desde China para obtener las piezas de repuesto que tu dispostivo necesita. También contamos con venta de piezas al por menor.
                        </p>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                        <img src="recursosPlantilla/images/about/about.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#about -->


    <!--
    ==================================================
    Portfolio Section Start
    ================================================== -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-heading">
                <h1 class="title wow fadeInDown" data-wow-delay=".3s">Nuestros Servicios</h1>
                <p class="wow fadeInDown" data-wow-delay=".5s">
                    Estos son los servicios que le ofrecemos a todos nuestros clientes. <br> Siempre con la mejor calidad y rápidez.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                        <div class="img-wrapper">
                            <img src="recursosPlantilla/images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="recursosPlantilla/images/portfolio/item-1.jpg">Demo</a>
                                    <a target="_blank" href="single-portfolio.html">Details</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                        <h4>
                        <a href="#">
                            Instalación de cámaras de seguridad
                        </a>
                        </h4>
                        <p>
                            Redesigne UI Concept
                        </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="img-wrapper">
                            <img src="recursosPlantilla/images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" >
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="recursosPlantilla/images/portfolio/item-2.jpg">Demo</a>
                                    <a target="_blank" href="single-portfolio.html">Details</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                        <h4>
                        <a href="#">
                            Reparación de Touch y Display
                        </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit.
                        </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="img-wrapper">
                            <img src="recursosPlantilla/images/portfolio/item-3.jpg" class="img-responsive" alt="" >
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="recursosPlantilla/images/portfolio/item-3.jpg">Demo</a>
                                    <a target="_blank" href="single-portfolio.html">Details</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                        <h4>
                        <a href="#">
                            Reparación de computadoras
                        </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet.
                        </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section> <!-- #works -->
    <!--
    ==================================================
    Portfolio Section Start
    ================================================== -->
    <section id="feature">
        <div class="container">
            <div class="section-heading">
                <h1 class="title wow fadeInDown" data-wow-delay=".3s">Nuestros servicios siempre cuentan con:</h1>

            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-flask-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Reparación por profesionales</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Atención al cliente</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Seguridad y Confianza</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-americanfootball-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Costos accesibles</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-keypad-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Garantía de 15 días</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-barcode-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Historial de cliente</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#feature -->

@endsection
