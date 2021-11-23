<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Taller de Reparacion Leo</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="{{ asset('recursosPlantilla/plugins/bootstrap/bootstrap.min.css') }}">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href= "{{ asset('recursosPlantilla/plugins/ionicons/ionicons.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('recursosPlantilla/plugins/animate-css/animate.css') }}">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{ asset('recursosPlantilla/plugins/slider/slider.css') }}">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="{{ asset('recursosPlantilla/plugins/owl-carousel/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('recursosPlantilla/plugins/owl-carousel/owl.theme.css') }}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{ asset('recursosPlantilla/plugins/facncybox/jquery.fancybox.css') }}">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{ asset('recursosPlantilla/css/style.css') }}">
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="{{route('inicio')}}" >
                            <img src="{{ asset('recursosPlantilla/images/logo.png') }}" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{route('inicio')}}" >Inicio</a>
                            </li>
                            <li><a href="">Productos</a></li>
                            <li><a href={{ url('/dashboard') }}>Dashboard</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="/persona">Mostrar</a></li>
                                        <li><a href="/persona/create">Agregar</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li><a href="{{route('feedback')}}">Contacto</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href={{ route('login') }}>LogIn</a></li>
                                        <li><a href={{ url('/dashboard') }}>LogOut</a></li>
                                        {{-- <form method="POST" action="http://crud.test/logout">
                                            <input type="hidden" name="_token" value="V7Zq0yQCkxLvUWLEoVmG4BLPATVdiEL1Ird2bYWU">
                                            <li><a href="http://crud.test/logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">Log Out</a></li>
                                        </form> --}}
                                        <!--<li><a href="#">LogOut</a></li>-->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>

        @yield('contenido')

            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">Nos interesa saber tu opinión:</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Tú opinión sobre nuestros servicios nos ayuda a brindarle una mejor experiencia con nosotros,<br>Siéntase libre de expresar su opinión sobre nuestro sitio web, nuestras instalaciones y nuestro personal.</p>
                                <a href="{{route('feedback')}}" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contáctanos</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br>
                            Get More
                            <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                                Free Bootstrap Templates
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

            <!-- Template Javascript Files
            ================================================== -->
            <!-- jquery -->
            <script src="{{ asset('recursosPlantilla/plugins/jQurey/jquery.min.js') }}"></script>
            <!-- Form Validation -->
            {{-- <script src="{{ asset('recursosPlantilla/plugins/form-validation/jquery.form.js') }}"></script>
            <script src="{{ asset('recursosPlantilla/plugins/form-validation/jquery.validate.min.js') }}"></script> --}}
            <!-- owl carouserl js -->
            <script src="{{ asset('recursosPlantilla/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
            <!-- bootstrap js -->
            <script src="{{ asset('recursosPlantilla/plugins/bootstrap/bootstrap.min.js') }}"></script>
            <!-- wow js -->
            <script src="{{ asset('recursosPlantilla/plugins/wow-js/wow.min.js') }}"></script>
            <!-- slider js -->
            <script src="{{ asset('recursosPlantilla/plugins/slider/slider.js') }}"></script>
            <!-- Fancybox -->
            <script src="{{ asset('recursosPlantilla/plugins/facncybox/jquery.fancybox.js') }}"></script>
            <!-- template main js -->
            <script src="{{ asset('recursosPlantilla/js/main.js') }}"></script>
 	</body>
</html>
