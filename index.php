<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/272/PNG/512/Contacts_30028.png">
    <title>Sistema de contactos</title>

</head>



<body style="background-color: #F4EEE0">

    <head>

        <nav class="navbar navbar-expand-lg fixed-top bg-primary">
            <div class="container-fluid">
                <img src="https://cdn.icon-icons.com/icons2/272/PNG/512/Contacts_30028.png" width="80px" style="padding-right: 20px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active text-white fs-4 text nav-btn" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active text-white fs-4 text nav-btn" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Géneros </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item " href="generos.php?genero=Romance">Romance</a></li>
                                <li><a class="dropdown-item " href="generos.php?genero=Terror">Terror</a></li>
                                <li><a class="dropdown-item " href="generos.php?genero=Comics">Comics</a></li>
                                <li><a class="dropdown-item " href="generos.php?genero=Cuentos">Cuentos</a></li>
                                <li><a class="dropdown-item " href="generos.php?genero=Ciencia ficción">Ciencia Ficción</a></li>
                                <li><a class="dropdown-item " href="generos.php?genero=Leyendas">Leyendas</a></li>
                                <li><a class="dropdown-item " href="generos.php?genero=Novelas">Novela</a></li>
                                <li><a class="dropdown-item " href="generos.php?genero=Programación">Programación</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white fs-4 text nav-btn" href="vista/admin/">Administrador</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" action="" method="POST">
                        <input class="form-control me-2" type="search" placeholder="¿Buscabas algo?" aria-label="Search" id="campo" name="campo">
                        <button class="btn text-white" style="background-color: #576CBC;" type="submit"><i class="bi bi-search"></i></button>
                        </>
                </div>
            </div>
        </nav>
    </head> <br>
    <br>
    <br>
    <br>
    <main>

        <div class="container">
            <!--Carousel !-->
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <!-- Inicia Carousel !-->
                <div class="carousel-inner">
                    <!-- Elemento Carousel !-->

                    <div class="carousel-item active">
                        <img src='' class='d-block w-100' height='230 px' />
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Reading Book</h5> -->
                            <!--  <p>Slider</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src='' class='d-block w-100' height='230 px' />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Literatura</h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src='' class='d-block w-100' height='230 px' />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Biblioteca</h5>
                            <p></p>
                        </div>
                    </div>
                    <!--termina elemento Carousel !-->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--Termina Carousel !-->

            <body>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Primer bloque de código -->
                            <div class="p-4 p-md-5 mb-4">
                                <h1 class="display-4 fst-italic">¡Bienvenido!</h1>
                                <p class="lead my-3">Nos complace tenerte aquí.
                                    En este lugar, encontrará una gran selección de titulos en formato .pdf, desde clásicos hasta los más
                                    recientes. Esperamos que disfrute navegando por nuestro catálogo y encuentre los títulos de su agrado.
                                    ¡Gracias por visitarnos y esperamos que disfrute de la experiencia en nuestra página web!</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <br>
                            <!-- Segundo bloque de código -->
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg h-md-250 position-relative" style="background-color: #ECF2FF;">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-dark"><i class="bi bi-pin-angle-fill"></i></strong>
                                    <h3 class="mb-0">Un día sin leer, es un día perdido</h3>
                                    <div class="mb-1 text-body-secondary">Abril 13</div>
                                    <p class="mb-auto">Si eres un ávido lector, sabes que no hay nada más satisfactorio que pasar tiempo con un buen libro. Ya sea una novela...</p>
                                    <a href="" class="stretched-link">Continuar leyendo...</a>
                                </div>
                                <div class="col-auto d-none d-lg-block" style="background: url('img/pdf.png') no-repeat center center / cover;">
                                    <div style="width: 200px; height: 250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Articulos !-->
                <div style="text-align:center;">
                    <h2>Nuestra selección</S></h2>
                    <hr>
                </div>


                <div class="row"> <!--Inicia row !-->



                    <div class="col-lg-3 col-md-8 col-sm-6 col-xs-12 py-2 mb-2" style="width: 14.2rem;">
                        <img src='' class='card-img-top' height='250' style='max-width: 100%;' />

                        <div class="card card-body" style='max-width: 100%;'>
                            <h5 class="card-title">Los 100: La Rebelión</h5>
                            <p class="card-text">Kass Morgan</p>
                            <a href="datoslibro.php?id=4">
                                <Button type="button" class="btn btn-secondary" style="background-color: #576CBC; --bs-btn-padding-y: .25rem; --bs-btn-padding-x: 3.10rem; --bs-btn-font-size: .95rem;">Descargar</Button>
                            </a>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-8 col-sm-6 col-xs-12 py-2 mb-2" style="width: 14.2rem;">
                        <img src='' class='card-img-top' height='250' style='max-width: 100%;' />

                        <div class="card card-body" style='max-width: 100%;'>
                            <h5 class="card-title">Los siete maridos de Evelyn Hugo</h5>
                            <p class="card-text">Taylor Jenkins Reid</p>
                            <a href="datoslibro.php?id=18">
                                <Button type="button" class="btn btn-secondary" style="background-color: #576CBC; --bs-btn-padding-y: .25rem; --bs-btn-padding-x: 3.10rem; --bs-btn-font-size: .95rem;">Descargar</Button>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Termina row !-->
                        <br>
                        <br>
                        <hr>

                        <div class="row g-5">
                            <div class="col-md-12 align-content-center">
                                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                                    Te puede interesar
                                </h3>

                                <article class="blog-post">
                                    <h2 class="blog-post-title mb-1">Descarga gratis libros digitales a través de Reader+</h2>
                                    <p>El portal web Reader+, es una de las tantas bibliotecas digitales que existen en la internet. La cual, compite muy de cerca entre los portales de libros más importantes del mundo. Contiene una variedad de títulos digitales que podrás descargar de forma segura y gratuita. Podrás disfrutar de un buen libro donde quiera que te encuentres a través de nuestro portal.</p>
                                    <hr>
                                    <h2>¿Qué encontrarás en Reader+?</h2>
                                    <p>Un gran conglomerado de libros digitales, revistas y comics en español. Además, te ofrecemos la facilidad de descargarlos en tus dispositivos, así podrás leerlos donde quieras y cuando quieras. Reader+ te ofrece descargas rápidas en .pdf y libre de anuncios.</p>
                                    <p>En epublibre.gratis podemos encontrar los siguientes géneros literarios:</p>

                                    <dl>
                                        <dt>Romance</dt>
                                        <dd>Sumérgete en el mundo del amor y la pasión con nuestra selección de libros de romance en PDF.</dd>
                                        <dt>Terror</dt>
                                        <dd>Explora tus miedos más oscuros con nuestra colección de libros de terror en formato PDF.</dd>
                                        <dt>Cómics</dt>
                                        <dd>Vive aventuras emocionantes y descubre mundos de fantasía con nuestra selección de cómics en PDF.</dd>
                                        <dt>Cuentos</dt>
                                        <dd>Descubre mundos imaginarios y emocionantes aventuras a través de nuestra colección de cuentos.</dd>
                                        <dt>Ciencia Ficción</dt>
                                        <dd>Viaja a universos desconocidos y descubre nuevas tecnologías con nuestra selección de libros de ciencia ficción.</dd>
                                        <dt>Leyendas</dt>
                                        <dd>Explora la riqueza de la cultura popular a través de nuestra colección de leyendas en formato PDF.</dd>
                                        <dt>Novelas</dt>
                                        <dd>Nada en un mar de drama y acompaña a los personajes en sus apasionantes aventuras con nuestra selección de novelas.</dd>
                                        <dt>Programación</dt>
                                        <dd>Adentrate en el fascinante mundo de la programación y adquiere nuevas habilidades con nuestra colección</dd>
                                    </dl>
                                    <hr>
                                    <h2>¿Por qué elegir Reader+?</h2>
                                    <p>Nos enorgullece promover la lectura en todas sus formas y estamos comprometidos en ofrecer a nuestros lectores una experiencia única y enriquecedora.

                                        Además, en nuestra página web, puedes encontrar libros en diferentes idiomas y formatos, lo que te permite disfrutar de una lectura adaptada a tus necesidades y preferencias.

                                        Así que, si estás buscando una opción para leer tus libros favoritos en PDF, no dudes en visitar nuestra página web y descubrir todas las opciones que tenemos para ofrecer. Estamos comprometidos en brindar una experiencia de lectura inolvidable y enriquecedora.</p>


                                    <nav class="blog-pagination float-end" aria-label="Pagination">
                                        <a class="btn btn-outline-primary rounded-pill" href="#"><i class="bi bi-arrow-up"></i></a>
                                    </nav>

                            </div>
                        </div>



    </main>


    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="my-5">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #12194A">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <div class="rounded-circle bg-blue shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 50px;">
                                <img src="img/reader+.png" height="70" alt="" loading="lazy" />
                            </div>
                            <p>
                                Aquí podrás descargar los libros más exitos de todos los tiempos
                                en formato .pdf para disfrutar leerlos sin interrupciones.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Categorías</h6>
                            <li class="nav-item dropdown">
                                <a class="nav-link active mb-4 font-weight-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Visita nuestra variedad de géneros</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <li><a class="dropdown-item " href="generos.php?genero=Romance">Romance</a></li>
                                    <li><a class="dropdown-item " href="generos.php?genero=Terror">Terror</a></li>
                                    <li><a class="dropdown-item " href="generos.php?genero=Comics">Comics</a></li>
                                    <li><a class="dropdown-item " href="generos.php?genero=Cuentos">Cuentos</a></li>
                                    <li><a class="dropdown-item " href="generos.php?genero=Ciencia ficción">Ciencia Ficción</a></li>
                                    <li><a class="dropdown-item " href="generos.php?genero=Leyendas">Leyendas</a></li>
                                    <li><a class="dropdown-item " href="generos.php?genero=Novelas">Novela</a></li>
                                    <li><a class="dropdown-item " href="generos.php?genero=Programación">Programación</a></li>
                                </ul>
                            </li>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
                            <p><i class="fas fa-home mr-3"></i> Ciudad Alamirano, GRO 40660, MX</p>
                            <p><i class="fas fa-envelope mr-3"></i> readerplus@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 52 767 101 76 89</p>
                            <p><i class="fas fa-print mr-3"></i> + 52 727 113 19 89</p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Siguenos</h6>

                            <!-- Facebook -->
                            <a class="btn btn-dark btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="bi bi-facebook"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-dark btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="bi bi-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-dark btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="bi bi-youtube"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-dark btn-floating m-1" style="background-color: #000000" href="#!" role="button"><i class="bi bi-apple"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-dark btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="bi bi-instagram"></i></a>

                            <!-- Github -->
                            <a class="btn btn-dark btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #576CBC">
                © 2023 Copyright:
                <a class="text-white" href="">Sistema de contactos</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>