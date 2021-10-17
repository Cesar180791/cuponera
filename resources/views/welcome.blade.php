<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title> Home Cuponera </title>
        <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

          <style>
              .carousel-item {
                height: 100vh;
                min-height: 300px;
            }
            .carousel-caption {
                bottom: 220px;
            }
            .carousel-caption h5 {
                font-size: 45px;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin-top: 25px;
                font-family: merienda;
            }
            .carousel-caption p {
                width: 60%;
                margin: auto;
                font-size: 18px;
                line-height: 1.9;
                font-family: poppins;
            }
            .carousel-caption a {
                text-transform: uppercase;
                background: #262626;
                padding: 10px 30px;
                display: inline-block;
                color: #fff;
                margin-top: 15px;
            }
            .navbar-nav a {
                font-family: poppins;
                font-size: 18px;
                text-transform: uppercase;
                font-weight: bold;
            }
            .navbar-light .navbar-brand {
                color: #fff;
                font-size: 25px;
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 2px;
            }
            .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
                color: #fff;
            }
            .navbar-light .navbar-nav .nav-link {
                color: #fff;
            }
            .navbar-nav {
                text-align: center;
            }
            .nav-link {
                padding: .2rem 1rem;
            }
            .nav-link.active, .nav-link:focus {
                color: #fff;
            }
            .navbar-toggler {
                padding: 1px 5px;
                font-size: 18px;
                line-height: 0.3;
                background: #fff;
            }
            .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
                color: #fff;
            }
            .w-100 {
                height: 100vh;
            }
            @media only screen and (max-width: 767px) {
                .navbar-nav.ml-auto {
                    background: rgba(0, 0, 0, 0.5);
                }
                .navbar-nav a {
                    font-size: 14px;
                    font-weight: arial;
                }
            }
                    </style>
    </head>
    <body class="antialiased">

          <div class="contenedor">
        
              <nav class="navbar navbar-expand-lg navbar-light fixed-top">
              <div class="container">
                <a class="navbar-brand" href="#">Cuponera VIP</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"> Ingresar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">

                    <video class="img-fluid" autoplay loop muted>
                        <source
                        src="assets/img/video1.mp4"
                          type="video/mp4"
                        />
                      </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animated bounceInRight" style="animation-delay: 1s">Universidad de Oriente </h5>
                        <p class="animated bounceInLeft" style="animation-delay: 2s">PROGRAMACION CON PHP Y MYSQL </p>
                        <p class="animated bounceInRight" style="animation-delay: 3s"><a  href="{{ url('/home') }}">Cuponera</a></p>
                    </div>
                </div>
                <div class="carousel-item">

                    <video class="img-fluid" autoplay loop muted>
                        <source
                        src="assets/img/video2.mp4"
                          type="video/mp4"
                        />
                      </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animated slideInDown" style="animation-delay: 1s">Ofertas en Linea </h5>
                        <p class="animated fadeInUp" style="animation-delay: 2s"> Las mejor experiencia en compras </p>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="{{ route('register') }}"> Registrase </a></p>
                    </div>
                </div>
                <div class="carousel-item">

                    <video class="img-fluid" autoplay loop muted>
                        <source
                        src="assets/img/video3.mp4"
                          type="video/mp4"
                        />
                      </video>

                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animated zoomIn" style="animation-delay: 1s">Publicidad Digital</h5>
                        <p class="animated fadeInLeft" style="animation-delay: 2s">Crea tus promociones , Impulsa tu negocio , Despega tus ventas con cupones digitales.</p>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="{{ route('register') }}"> Registrase </a></p>
                    </div>
                </div>
            </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/app.js"></script> 
          
    </body>   
</html>

