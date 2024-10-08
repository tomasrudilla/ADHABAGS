<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-+9TT5wAm+jk2MgA4prvqP0Q76Hjz6I5xjl1s2tdRSz5P1dc2D7d+yFtvjbqCFSI6W0cD5Z//kPyWyXUO+FvCBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand" href="#">
                <img src="img/logoAdha.png" alt="Logo" height="140">
            </a>

            <!-- Contenedor de búsqueda -->
            <form class="d-flex mx-auto search-container">
                <div class="input-group">
                    <input id="search-bar" class="form-control" type="search" placeholder="¿Qué estás buscando?" aria-label="Buscar">
                    <button class="btn btn-search" type="submit">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </div>
            </form>

            <!-- Carrito, Login y Menú hamburguesa a la derecha -->
            <div class="d-flex align-items-center">
                <a href="carrito.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <a href="paginas/login.php" class="nav-link">
                    <i class="fa-solid fa-user"></i>
                </a>

                <!-- Botón menú hamburguesa -->
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Segunda barra de navegación con las secciones -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paginas/productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paginas/preguntas.php">Preguntas Frecuentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paginas/contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


    <main>
        <!-- Carrusel debajo del navbar -->
        <div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/1 (2).jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/2 (2).jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/3 (2).jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


        <!-- Productos Destacados -->
        <section class="container mt-4" style="margin-bottom: 60px;">
    <h2 class="new-amsterdam-regular" style="margin-bottom: 30px;">
        Productos Destacados:
        <a href="paginas/productos.php">
            <button class="vertodos">Ver todos</button>
        </a>
    </h2>

    <div class="row-cards">
        <div class="col-md-3">
            <div class="card">
                <img src="img/1.jpg" class="card-img-top" alt="Producto 1">
                <div class="card-body">
                    <h5 class="card-title">Nini</h5>
                    
                    <a href="paginas/productos.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="img/2.jpg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Gigi</h5>
                    
                    <a href="paginas/productos.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="card">
                <img src="img/3.jpg" class="card-img-top" alt="Producto 3">
                <div class="card-body">
                    <h5 class="card-title">Anha</h5>
                   
                    <a href="paginas/productos.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="img/4.jpg" class="card-img-top" alt="Producto 4">
                <div class="card-body">
                    <h5 class="card-title">Loki</h5>
                    
                    <a href="paginas/productos.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</section>


    </main>

    <footer class="site-footer bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>Sobre Nosotros</h6>
                <p class="text-justify">Somos un emprendimiento de carteras mayoristas y minoristas. Contamos con
                    distintas variedades de carteras, aceptamos todos los medios de pago, realizamos envíos a todo el
                    país.</p>
                <p>Envios a todo el pais
                    <img src="./img/correoargentino.jpg" alt="Descripción de la imagen"
                        style="width: 80px; height: auto; vertical-align: middle;">
                    <img src="./img/andreani.png" alt="Descripción de la otra imagen"
                        style="width: 120px; height: auto; vertical-align: middle;">
                </p>
                <p>Todos los medios de pago.
                    <img src="./img/american.png" alt="Descripción de la imagen"
                        style="width: 45px; height: auto; vertical-align: middle;">
                    <img src="./img/cabal.png" alt="Descripción de la otra imagen"
                        style="width: 45px; height: auto; vertical-align: middle;">
                        <img src="./img/mastercard.png" alt="Descripción de la otra imagen"
                        style="width: 45px; height: auto; vertical-align: middle;">
                        <img src="./img/visadbito.png" alt="Descripción de la otra imagen"
                        style="width: 45px; height: auto; vertical-align: middle;">
                        <img src="./img/pagofacil.png" alt="Descripción de la otra imagen"
                        style="width: 45px; height: auto; vertical-align: middle;">
                        <img src="./img/rapipago.png" alt="Descripción de la otra imagen"
                        style="width: 45px; height: auto; vertical-align: middle;">
                        <img src="./img/tarjetashopping.png" alt="Descripción de la otra imagen"
                        style="width: 45px; height: auto; vertical-align: middle;">
                        <img src="./img/visa.png" alt="Descripción de la otra imagen"
                        style="width: 45px; height: auto; vertical-align: middle;">
                        <img src="./img/naranja.png" alt="Descripción de la otra imagen"
                        style="width: 45px; height: auto; vertical-align: middle;">
                </p>
                <p>Compra con seguridad.
                    <img src=" ./img/seguridada.png" alt="Descripción de la imagen"
                        style="width: 40px; height: auto; vertical-align: middle;">
            </div>
            <div class="col-md-6">
                <ul class="social-icons list-unstyled d-flex justify-content-end">
                    <li class="ms-3"><a class="text-light" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="ms-3"><a class="text-light" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="ms-3"><a class="text-light" href="https://www.instagram.com/adhabags/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <p class="copyright-text mb-0">Argentina &copy; 2022 Todos los derechos reservados por <a
                        href="#">Adhabags</a>.</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/57817a8ec1.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>