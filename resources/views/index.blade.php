<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Website Title -->
    <title>Viviana Magalhães</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Lightbox -->
    <link href="assets/lightbox/css/lightbox.css" rel="stylesheet">
    <!-- Text Rotator-->
    <link href="assets/textrotator/simpletextrotator.css" rel="stylesheet">
    <!-- FlexSlider -->
    <link href="assets/flexslider/flexslider.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Animations -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom Favicon -->
    <!-- <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" /> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.js"></script>
    <script src="assets/respond/respond.min.js"></script>
    <![endif]-->
</head>
<body id="top">

<!-- ==========================
HEADER SECTION
=========================== -->
<header id="home">
    <!-- creative menu -->
    <div class="container-fluid">
        <div class="row">
            <div class="menu-wrap">
                <nav class="menu">
                    <!-- Menu Links -->
                    <div class="icon-list">
                        <a style="cursor: pointer;" id="home-link"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
                        <a style="cursor: pointer;" id="about-link"><i class="fa fa-fw fa-quote-left"></i><span>About</span></a>
                        <a style="cursor: pointer;" id="service-link"><i class="fa fa-fw fa-globe"></i><span>Service</span></a>
                        <a style="cursor: pointer;" id="instagram-link"><i class="fa fa-fw fa-instagram"></i><span>Instagram</span></a>
                        <a style="cursor: pointer;" id="contact-link"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
                    </div>
                </nav>
            </div>
            <button class="menu-button" id="open-button"></button><!-- menu button -->
        </div><!--/row-->
    </div><!--/container-->
    <!-- Header Image -->
    <section class="hero" id="hero">
        <div class="container">
            <!-- Slider Button (don't edit!)-->
            <div class="row">
                <div class="col-md-12 text-right navicon">
                    <a id="nav-toggle" class="nav_slide_button" href="index.html#"><span></span></a>
                </div>
            </div>
            <!-- HEADER HEADLINE -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1 inner">
                    <h1 class="animated fadeInDown">
                        <span style="color: #353535">Viviana Magalhães</span>
                    </h1><!-- Title -->
                    <h3 class="animated fadeInUp delay-05s"><span class="rotate">Consultora comportamental</span></h3><!-- Text Rotator -->
                </div>
            </div>
            <!-- Learn More Button -->
            <div class="row" id="go-about-link">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <a id="about-link" class="scrollto wow fadeInUp delay-5s ">
                        <p style="cursor: pointer;"></p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Image End -->
</header>
<!-- ==========================
HEADER SECTION END
=========================== -->




<!-- ==========================
ABOUT SECTION
=========================== -->
<section class="intro text-center section-padding color-bg" id="about">
    <div class="container">
        <!-- WELCOME TEXT -->
        <div class="row">
            <div class="col-md-12 wp1">
                <h1 class="arrow">Sobre mim <span></span></h1><!-- Headline -->

                <!-- about / welcome text -->
                <p style="font-weight: 500;">Viviana Magalhães Consultora Comportamental Nasceu a 28 de Dezembro de 1985, em Matosinhos. Licenciou-se em Engenharia Eletrotécnica – Sistemas Elétricos de Energia, no ISEP.
                    Desde cedo trocou a eletricidade pelas pessoas fazendo carreira na área da formação profissional em áreas como a Matemática, Higiene e Segurança no Trabalho e nos últimos anos na área comportamental nas vertentes de desenvolvimento pessoal e vendas!
                    Paralelamente fundou a Viclinic, um espaço de pessoas para pessoas, onde desempenha funções de Lifecoach.
                    É apaixonada por leitura, viagens, escrita, fotografia e por pessoas. Gosta de as observar e ajudar e utiliza o coaching para melhorar a vida pessoal e profissional de quem a rodeia.
                    Acredita que mais do que um estado de espírito, ser feliz é um modo de vida. Coaching Formação Consultoria Comportamental Coaching O Coaching é sempre sobre o cliente, ou seja, o coaching é sobre si!
                    Há uma infinidade de célebres frases que nos ajudam a entender o coaching.
                    Para mim, definir o coaching, é tão simples como dizer que é um processo de si para si com o auxílio de alguém capacitado para o ajudar a fazer acontecer.
                    O coaching é um processo de crescimento pessoal que possibilita evolução e realização em toda e qualquer área da sua vida.
                    No coaching nada acontece por magia. Tudo já foi testado vezes sem conta e por isso, com comprometimento e todas aquelas potencialidades que tem dentro de si e ainda não consegue usar em pleno, verá, com certeza, a magia acontecer na sua vida.
                    Se comigo funcionou, consigo tem tudo para dar certo também! Consultoria Comportamental
                    Virada para as empresas, para uma analise do consultor aos colaboradores e definiçao de estrategias de melhoria.</p>
            </div>
        </div>
    </div>
</section>




<!-- ==========================
SERVICE SECTION
=========================== -->
<section class="features text-center section-padding" id="service">
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">Serviços</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="services">
                    <!-- Service Box 1 -->
                    <div class="col-md-4 wp2 item">
                        <div class="icon">
                            <i class="fa fa-bullseye"></i><!-- Icon -->
                        </div>
                        <h2 id="training">Coaching</h2><!-- Title -->
                        <p class="text-justify">O Coaching é sempre sobre o cliente, ou seja, o coaching é sobre si!<br/>
                            Há uma infinidade de célebres frases que nos ajudam a entender o coaching. <br/>
                            Para mim, definir o coaching, é tão simples como dizer que é um processo de si para si com o auxílio de alguém capacitado para o ajudar a fazer acontecer. <br/>
                            O coaching é um processo de crescimento pessoal que possibilita evolução e realização em toda e qualquer área da sua vida.<br/>
                            No coaching nada acontece por magia. Tudo já foi testado vezes sem conta e por isso, com comprometimento e todas aquelas potencialidades que tem dentro de si e ainda não consegue usar em pleno, verá, com certeza, a magia acontecer na sua vida. <br/>
                            Se comigo funcionou, consigo tem tudo para dar certo também!</p><!-- Description -->
                    </div>
                    <!-- Service Box 2 -->
                    <div class="col-md-4 wp2 item delay-05s">
                        <div class="icon">
                            <i class="fa fa-users"></i><!-- Icon -->
                        </div>
                        <h2 id="training">Formação</h2><!-- Title -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.
                        </p><!-- Description -->
                    </div>
                    <!-- Service Box 3 -->
                    <div class="col-md-4 wp2 item delay-1s">
                        <div class="icon">
                            <i class="fa fa-comments"></i><!-- Icon -->
                        </div>
                        <h2 style="padding-bottom: 3px;">Consultoria Comportamental</h2><!-- Title -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.
                        </p><!-- Description -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- ==========================
ABOUT SECTION END
=========================== -->

<!-- ==========================
SERVICE SECTION
=========================== -->
<section class="features text-center section-padding" id="service">
    <div class="container">
        <!-- Headline -->
        <div class="row" style="padding-bottom: 20px">
            <div class="col-md-12">
                <h1 class="arrow">Instagram</h1>
            </div>
        </div>
        <section id="instagram"></section>
    </div>
</section>
<!-- ==========================
ABOUT SECTION END
=========================== -->

<!-- ==========================
CONTACT SECTION END
=========================== -->
<section id="contact"></section>
<!-- ==========================
CONTACT SECTION
=========================== -->

<!-- ==========================
FOOTER SECTION
=========================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>VIVIANA MAGALHÃES</p>
            </div>
        </div>
    </div>
</footer>
<!-- ==========================
FOOTER SECTION END
=========================== -->


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- SmoothScroll -->
<script type="text/javascript" src="assets/smoothscroll/smoothscroll.js"></script>
<!-- Bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/waypoints.min.js"></script>
<!-- classie.js -->
<script src="js/classie.js"></script>
<!-- FlexSlider -->
<script src="assets/flexslider/jquery.flexslider.js"></script>
<!-- Modernizr -->
<script src="js/modernizr.js"></script>
<!-- Text Rotator -->
<script src="assets/textrotator/jquery.simple-text-rotator.js"></script>
<!-- Lightbox.js -->
<script src="assets/lightbox/js/lightbox.min.js"></script>
<!-- Google Maps -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
<!-- Theme JavaScript Core -->
<script src="js/main.js"></script>
<script src="js/script.js"></script>
{{-- SCRIPTS SECTION --}}
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

<!-- GOOGLE MAPS DATA -->
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(41.178821, -8.681734),

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googlemaps');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        var icon = {
            url: "/images/marker.png", // url
            scaledSize: new google.maps.Size(40, 50), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };


        var marker = new google.maps.Marker({
            position: {lat: 41.178821, lng: -8.681734},
            map: map,
            icon: icon
        });

    }

</script>

<!-- TEXT ROTATOR SETTINGS -->
<script type="text/javascript">
    $(".rotate").textrotator({
        animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 2000 // How many milliseconds until the next word show.
    });

    $("#go-about-link").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 2000);
    });
    
    $("#about-link").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top - 100
        }, 2000);
    });

    $("#service-link").click(function() {
        $('html, body').animate({
            scrollTop: $("#service").offset().top - 100
        }, 2000);
    });

    $("#instagram-link").click(function() {
        $('html, body').animate({
            scrollTop: $("#instagram").offset().top - 250
        }, 2000);
    });

    $("#contact-link").click(function() {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top - 100
        }, 2000);
    });

    $("#home-link").click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 2000);
    });

</script>

</body>
</html>