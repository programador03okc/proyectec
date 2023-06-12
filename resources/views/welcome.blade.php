<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Softar - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>PROYECTEC</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/PROYECTEC_FAVICONMesa_de_trabajo_1.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-bg navbar-fixed dark no-background bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    {{-- <ul>
                        <li class="button"><a href="#">Free Trial</a></li>
                    </ul> --}}
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/PROYECTEC_LOGO.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right " data-in="#" data-out="#">

                        <li>
                            <a class="smooth-menu text-white" href="#home" data-text="bg-color">INICIO</a>
                        </li>
                        <li>
                            <a class="smooth-menu text-white" href="#overview" data-text="bg-color">NOSOTROS</a>
                        </li>
                        <li>
                            <a class="smooth-menu text-white" href="#team" data-text="bg-color">PORTAFOLIO</a>
                        </li>
                        <li>
                            <a class="smooth-menu text-white" href="#contact" data-text="bg-color">CLIENTES</a>
                        </li>
                        <li>
                            <a class="smooth-menu text-white" href="#footer" data-text="bg-color">CONTACTO</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

   <!-- Start Banner
    ============================================= -->
    <div class="banner-area bg-top text-capitalized text-center top-pad-80 auto-height" style="background-image: url(assets/img/PROYECTEC_BANNER_PRINCIPAL.png);">
        <div class="container">
            <div class="content-box">
                <div class="row text-right">
                    <div class="col-lg-12 info">
                        <h2 class="wow fadeInRight mb-0 text-white" data-wow-defaul="300ms">Somos el socio</h2>
                        <h2 class="wow fadeInRight mb-0 text-white" data-wow-defaul="300ms">tecnológico que tu</h2>
                        <h2 class="wow fadeInRight mb-0 text-white" data-wow-defaul="300ms">empresa necesita</h2>

                        <a href="#" class="btn btn-banner text-white">MÁS INFORMACIÓN</a>
                    </div>
                    <div class="col-lg-12 d-none d-lg-block d-md-block">
                        <div class="thumb-inner">
                            {{-- <img class="wow fadeInRight" data-wow-delay="900ms" src="assets/img/dashboard/7.png" alt="Thumb">
                            <img class="wow fadeInLeft" data-wow-delay="1100ms" src="assets/img/dashboard/5.png" alt="Thumb"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Star Clients Area
    ============================================= -->
    {{-- <div class="clients-area default-padding-top">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 left-info">
                    <ul class="achivement">
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="10000" data-speed="5000">10000</div>
                                    <div class="operator">+</div>
                                </div>
                                <span class="medium">Trusted Users</span>
                            </div>
                        </li>
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="100" data-speed="5000">100</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Positive Rating</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 right-info">
                    <h2>Trusted client by over <br>10000+ of the world’s</h2>
                </div>
                <div class="col-lg-12">
                    <div class="partner-carousel owl-carousel owl-theme">
                        <img src="assets/img/150x80.png" alt="Partner">
                        <img src="assets/img/150x80.png" alt="Partner">
                        <img src="assets/img/150x80.png" alt="Partner">
                        <img src="assets/img/150x80.png" alt="Partner">
                        <img src="assets/img/150x80.png" alt="Partner">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Clients Area -->

    <!-- Star Features Area
    ============================================= -->
    <div id="overview" class="features-area default-padding-top carousel-shadow mb-5">
        <!-- Shape -->
        <div class="fixed-shape-bottom">
            {{-- <img src="assets/img/shape/1.png" alt="Shape"> --}}
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="features-box">
                <div class="row align-center">
                    <div class="col-lg-6 left-content">
                        <h2>Sobre Nosotros</h2>
                        <p>
                            Somos una empresa con más de 04 años de experiencia,
                            dedicada a brindar soluciones integrales de hardware,
                            software y gestión de proyectos. aportamos nuestro
                            conocimiento y alineamos sus expectativas con las
                            nuestras para definir juntos los alcances del proyecto,
                            gestionamos el tiempo, calidad, riesgos y presupuesto de
                            tal manera que se garantice la sostenibilidad del proyecto.
                        </p>
                    </div>
                    <div class="col-lg-6 right-content">
                        <div class="features-carousel owl-carousel owl-theme">
                            <div class="single-item">
                                <div class="item-inner">
                                    <div class="item">
                                        <div class="icon">
                                            {{-- <i class="flaticon-label"></i> --}}
                                            <img class="p-2" src="{{ asset('assets/img/PROYECTEC_ICONO_1.png') }}"  >
                                        </div>
                                        <div class="info">
                                            <h4>Misión</h4>
                                            <p>
                                                Proveer soluciones integrales de tecnología de
                                                la información, que favorezcan el logro de los
                                                objetivos empresariales de nuestros clientes
                                                bajo los pilares de eficiencia, eficacia y calidad.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner">
                                    <div class="item">
                                        <div class="icon">
                                            {{-- <i class="flaticon-speech-bubble"></i> --}}
                                            <img class="p-2" src="{{ asset('assets/img/PROYECTEC_ICONO_2.png') }}"  >
                                        </div>
                                        <div class="info">
                                            <h4>Visión</h4>
                                            <p>
                                                Ser la empresa de soluciones integrales de
                                                tecnología de la información más confiable del
                                                Perú.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Overview
    ============================================= -->
    {{-- <div id="overview" class="overview-area relative default-padding-top bg-gray carousel-shadow">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Quick Software Overview</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="overview-carousel owl-carousel owl-theme">
                        <!-- Single item -->
                        <div class="item">
                            <img src="assets/img/2440x1578.png" alt="Thumb">
                            <div class="content">
                                <h4><span>01</span> App Integration</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="item">
                            <img src="assets/img/2440x1578.png" alt="Thumb">
                            <div class="content">
                                <h4><span>02</span> App Customization</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="item">
                            <img src="assets/img/2440x1578.png" alt="Thumb">
                            <div class="content">
                                <h4><span>03</span> App Modification</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Overview -->

     <!-- Star Advanced Features Area
    ============================================= -->
    {{-- <div id="features" class="advanced-features-area text-center default-padding bottom-less">
        <!-- Shape -->
        <div class="right-shape">
            <img src="assets/img/shape/8.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Advanced features</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="af-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="icon">
                               <i class="flaticon-website"></i>
                           </div>
                           <div class="info">
                               <h4>Fully Customizable</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                           <div class="icon">
                               <i class="flaticon-integration"></i>
                           </div>
                           <div class="info">
                               <h4>App Integration</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                               </p>
                           </div>
                       </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                           <div class="icon">
                               <i class="flaticon-resolution-1"></i>
                           </div>
                           <div class="info">
                               <h4>High Resolution</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                               </p>
                           </div>
                       </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="icon">
                               <i class="flaticon-drag"></i>
                           </div>
                           <div class="info">
                               <h4>Drag And Drop</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Advanced Features Area -->

    <!-- Start Process Area
    ============================================= -->
    {{-- <div id="process" class="process-area default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb">
                    <img src="assets/img/illustration/7.png" alt="Thumb">
                </div>
                <div class="col-lg-6 info ml-auto">
                    <h2>Three Simple Step To Started Working Process</h2>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-presentation"></i>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay="300ms">
                                <h4>Research Project <span>Step - 01</span></h4>
                                <p>
                                    Sometimes furnished collected add for resources attention. Norland an by minuter.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-target"></i>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay="500ms">
                                <h4>Targeting <span>Step - 02</span></h4>
                                <p>
                                    Bumetimes furnished collected add for resources attention. Norland an minister.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-report"></i>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay="700ms">
                                <h4>Result <span>Step - 03</span></h4>
                                <p>
                                    Sometimes furnished collected add for resources attention. Norland an by minuter.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Process Area -->

    <!-- Start Team
    ============================================= -->
    <div id="team" class="team-area bg-gray default-padding bottom-less">
        <!-- Shape -->
        {{-- <div class="fixed-shape" style="background-image: url(assets/img/shape/5.png);"></div> --}}
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="title-section mb-5">Nuestro Portafolio</h2>
                        {{-- <div class="devider"></div> --}}
                        <h4>
                            Dentro de los proyectos tecnológicos que tenemos como parte de nuestro
                            portafolio podemos mencionar:
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items">
                <div class="row">
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/servicios/PROYECTEC_SERViCIO_1.png" alt="Thumb">
                            </div>
                            <div class="info text-center">
                                <h4>Sistema Eléctrico Estabilizado</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/servicios/PROYECTEC_SERViCIO_2.png" alt="Thumb">
                            </div>
                            <div class="info text-center">
                                <h4>Seguridad Ciudadana</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/servicios/PROYECTEC_SERViCIO_3.png" alt="Thumb">
                            </div>
                            <div class="info text-center">
                                <h4>Fortalecimiento Institucional</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/servicios/PROYECTEC_SERViCIO_4.png" alt="Thumb">
                            </div>
                            <div class="info text-center">
                                <h4>TICs para la Educación</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/servicios/PROYECTEC_SERViCIO_5.png" alt="Thumb">
                            </div>
                            <div class="info text-center">
                                <h4>Edificio Inteligente Sustentable</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/servicios/PROYECTEC_SERViCIO_6.png" alt="Thumb">
                            </div>
                            <div class="info text-center">
                                <h4>Smart City: Ciudad Inteligente</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="single-item col-lg-4 offset-lg-2 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/servicios/PROYECTEC_SERViCIO_7.png" alt="Thumb">
                            </div>
                            <div class="info text-center">
                                <h4>Data Center de alta disponibilidad</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/servicios/PROYECTEC_SERViCIO_8.png" alt="Thumb">
                            </div>
                            <div class="info text-center">
                                <h4>Análisis, mejora y Auditoría de Procesos</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials
    ============================================= -->
    {{-- <div class="testimonials-area carousel-shadow default-padding-top">
        <!-- Shape -->
        <div class="fixed-shape-left">
            <img src="assets/img/shape/9.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="testimonial-items">
                <div class="row align-center">
                    <div class="col-lg-7 review">
                        <h2>What people say about us</h2>
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/100x100.png" alt="Author">
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in. Chamber reached do he nothing be.
                                    </p>
                                    <h4>Ahel Natasha</h4>
                                    <span> Managing Director</span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/100x100.png" alt="Author">
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in. Chamber reached do he nothing be.
                                    </p>
                                    <h4>Ahel Natasha</h4>
                                    <span> Managing Director</span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-5 thum">
                        <img src="assets/img/illustration/12.png" alt="illustration">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Testimonials Area -->

    <!-- Start Pricing
    ============================================= -->
    {{-- <div id="pricing" class="pricing-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Packages</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Trial Version</h4>
                                <span>Save 25%</span>
                                <h2><sup>$</sup>0 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-border btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Regular</h4>
                                <span>Save 35%</span>
                                <h2><sup>$</sup>29 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-effect btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Extended</h4>
                                <span>Save 49%</span>
                                <h2><sup>$</sup>59 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-border btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Pricing Area -->

    <!-- Start Blog
    ============================================= -->
    {{-- <div id="blog" class="blog-area default-padding-top bg-gray bottom-less">
        <!-- Shape -->
        <div class="fixed-shape-bottom">
            <img src="assets/img/shape/6.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Latest News</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                            <div class="date"><strong>18</strong> <span>Apr</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> User</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Overcame breeding or my concerns removing desirous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                            <div class="date"><strong>25</strong> <span>Aug</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 35 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Considered imprudence of he friendship boisterous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                            <div class="date"><strong>05</strong> <span>Jul</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> user</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Overcame breeding or my concerns removing desirous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

            </div>
        </div>
    </div> --}}
    <!-- End Blog -->

    <!-- Start Contact Area
    ============================================= -->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12 info">
                    <div class="site-heading text-center">
                        <h2 class="title-section ">Ellos confian en nosotros</h2>

                    </div>
                </div>
                <div class="single-item cliente col-lg-3 col-md-6 mb-3">
                    <div class="item customer">
                        <img src="{{ asset('assets/img/clientes/PROYECTEC_CLIENTE_1.png') }}" alt="cliente_minjus">
                    </div>
                </div>
                <div class="single-item cliente col-lg-3 col-md-6 mb-3">
                    <div class="item customer">
                        <img src="{{ asset('assets/img/clientes/PROYECTEC_CLIENTE_2.png') }}" alt="cliente_minjus">
                    </div>
                </div>
                <div class="single-item cliente col-lg-3 col-md-6 mb-3">
                    <div class="item customer">
                        <img src="{{ asset('assets/img/clientes/PROYECTEC_CLIENTE_3.png') }}" alt="cliente_minjus">
                    </div>
                </div>
                <div class="single-item cliente col-lg-3 col-md-6 mb-3">
                    <div class="item customer">
                        <img src="{{ asset('assets/img/clientes/PROYECTEC_CLIENTE_4.png') }}" alt="cliente_minjus">
                    </div>
                </div>
                <div class="single-item cliente col-lg-3 col-md-6 mb-3">
                    <div class="item customer">
                        <img src="{{ asset('assets/img/clientes/PROYECTEC_CLIENTE_5.png') }}" alt="cliente_minjus">
                    </div>
                </div>
                <div class="single-item cliente col-lg-3 col-md-6 mb-3">
                    <div class="item customer">
                        <img src="{{ asset('assets/img/clientes/PROYECTEC_CLIENTE_6.png') }}" alt="cliente_minjus">
                    </div>
                </div>
                <div class="single-item cliente col-lg-3 col-md-6 mb-3">
                    <div class="item customer">
                        <img src="{{ asset('assets/img/clientes/PROYECTEC_CLIENTE_7.png') }}" alt="cliente_minjus">
                    </div>
                </div>
                <div class="single-item cliente col-lg-3 col-md-6 mb-3">
                    <div class="item customer">
                        <img src="{{ asset('assets/img/clientes/PROYECTEC_CLIENTE_9.png') }}" alt="cliente_minjus">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer
    ============================================= -->
    <footer id="footer" class="bg-blue-proyectec text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <img src="assets/img/PROYECTEC_LOGO_NEGATIVO.png" alt="Logo">
                        <p>
                            Si tienes alguna consulta, podemos
                            ayudarte a resolverla.
                        </p>
                        <p>
                            Envíanos tu correo electrónico y nos
                            comunicaremos contigo.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <form action="{{ route('mail.contact') }}" method="POST">
                            @csrf
                            @if (session('info'))
                                    <div class="alert alert-success" role="alert">
                                        Su correo fue envíado con éxito
                                    </div>
                                @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="nombre" class="form-control input-proyectec" id="nombre" placeholder="Nombre..." name="nombre" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="telefono" class="form-control input-proyectec" id="telefono" placeholder="Teléfono celular..." name="telefono" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="empresa" class="form-control input-proyectec" id="empresa" placeholder="Empresa..." name="empresa" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control input-proyectec" id="email" placeholder="Email..." name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-proyectec"> Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="col-lg-1 col-md-6 item">
                    </div> --}}
                    <div class="col-lg-3 offset-lg-1 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contacto</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
										{{--
                                        <div class="content">
                                            <strong>TELÉFONO:</strong>
                                            <a href="tel:+51 966 003 009">+51 966 003 009</a>
                                        </div>--}}
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>EMAIL:</strong>
                                            <a href="mailto:pyventas01@proyectec.com.pe">pyventas01@proyectec.com.pe</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content">
                                            <strong>DIRECCION:</strong>
                                            <a href="#">Urb. El Porvenir Cal. Coronel Leoncio Prado 615
                                                Miraflores-Arequipa-Arequipa</a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        {{-- <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2021. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
<script>
    $(function() {
        $(document).scroll(function() {
            if ($(this).scrollTop() > 1) {
                $('[data-text="bg-color"]').removeClass('text-white');
            }
            if ($(this).scrollTop() < 1) {
                $('[data-text="bg-color"]').addClass('text-white');
            }
        });
    });
</script>
