<?php

require_once("../componentes/conexion.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-+9TT5wAm+jk2MgA4prvqP0Q76Hjz6I5xjl1s2tdRSz5P1dc2D7d+yFtvjbqCFSI6W0cD5Z//kPyWyXUO+FvCBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <img src="../img/logoAdha.png" alt="Logo" height="140">
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
                <a href="../carrito.php" class="nav-link">
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
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="preguntas.php">Preguntas Frecuentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="faq-container">
<h1 class="new-amsterdam-regular" style="margin-bottom: 10px;">Preguntas frecuentes:</h1>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Cuáles son las formas de pago?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Disponemos de los siguientes medios de pago:<br>
                        <ul>
                            <li>Transferencia</li>
                            <li>Tarjetas (3 cuotas sin interés)</li>
                            <li>Efectivo</li>
                            <li>Crypto (USDT/USDC)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Cuál es el costo de envío?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        El costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Cómo se realizan los envíos?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Trabajamos con Correo Argentino.<br>
                        También nos podés consultar por WhatsApp para envíos vía MotoMensajería.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ¿Dónde puedo recibir mi pedido?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Realizamos envíos a todo el país.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ¿Cuánto tarda en llegar el pedido?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        El tiempo de entrega dependerá del tipo de envío seleccionado. En general, la demora es de entre 3 y 7 días hábiles luego de acreditado el pago.
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <p>Cualquier otra duda nos podés escribir por Instagram en <a href="https://www.instagram.com/adhabags/"> @Adhabags </a> y a la brevedad te estaremos respondiendo!</p>
    </main>
    

<?php

require_once("../componentes/footer.php");


?>