<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Cuponera VIP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
     
            #main-content{
                width: 1200px;
                margin: 20px auto;
                height: 900px;
            }
           
            content{
                background-color: #fff;
                width: 1200px;
                min-height: 600px;
                float:left;
            }

                    .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
                        height: 50px;
                        float:left;
                        margin-top:4px;
                        margin-bottom: 4px;
                    
                    }

                    .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
                    
        </style>

            <style>
                ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #1B4F72;
                }
                
                li {
                float: right;
                }
                
                li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                }
                
                li a:hover:not(.active) {
                background-color: #111;
                }
                
                .active {
                background-color: #04AA6D;
                }
        </style>
    </head>
    <body class="antialiased">
  <ul>
                    <li><a href="{{ url('/home') }}">Inicio</a></li>
                    <li><a href="{{ route('login') }}">Ingresar</a></li>
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                  </ul>
        <div id="main-content">
              
            <content>
                <section class="py-12 text-center container">
                    <div class="row py-lg-5">
                      <div class="col-lg-7 col-md-7 mx-auto">
                          <img  class="img-fluid " src="assets/img/logovip.png" alt="">
                      </div>
                    </div>
                  </section>
                  <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                              <div class="card shadow-sm">
                                  <img src="assets/img/regalo.gif" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" alt="">
                                <div class="card-body">
                                  <p class="card-text"><center>Cuponera VIP</center></p>
                                  <div class="d-flex justify-content-between align-items-center">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card shadow-sm">
                                <img src="assets/img/descuento.gif" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" alt="">
                                <div class="card-body">
                                  <p class="card-text"><center>Cuponera VIP</center></p>
                                  <div class="d-flex justify-content-between align-items-center">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card shadow-sm">
                              <img src="assets/img/regalo.gif" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" alt="">
                                <div class="card-body">
                                  <p class="card-text"><center>Cuponera VIP</center></p>
                                  <div class="d-flex justify-content-between align-items-center">
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
            </content>
        </div>
    </body>   
</html>
