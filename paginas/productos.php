<?php

require_once("../componentes/conexion.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/style.css">
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

<main>
    <!-- Sección de Productos -->
    <section id="productos" class="container mt-4">
        <h2 class="new-amsterdam-regular" style="margin-bottom: 30px;">Productos:</h2>
        <div class="row">
        <?php
    // Consulta para obtener productos de la base de datos
    $consulta = "SELECT id, cartera, precio, imagen FROM carteras";
    $respuesta = mysqli_query($con, $consulta);

    // Verifica si se obtuvo resultados
    if ($respuesta && mysqli_num_rows($respuesta) > 0) {
        while ($fila = mysqli_fetch_array($respuesta)) {
            echo "<div class='col-12 col-sm-6 col-md-4 col-lg-3 mb-4'>
                    <div class='card-productos'>
                        <img src='../img/{$fila['imagen']}' class='card-img-top-productos' alt='{$fila['cartera']}'>
                        <div class='card-body-productos'>
                            <h5 class='card-title-productos'>{$fila['cartera']}</h5>
                            <h5 class='card-title-precio-productos'>$ " . number_format($fila['precio'], 0, ',', '.') . "</h5>
                            <div class='button-group'>
                                <a href='../componentes/agregar_carrito.php?id={$fila['id']}' class='btn btn-comprar-productos'>COMPRAR</a>
                                <a href='producto.php?id={$fila['id']}' class='btn btn-ver-productos'>
                                    <i class='fas fa-eye'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    } else {
        echo "<p class='text-center'>No hay productos disponibles en este momento.</p>";
    }
?>

        </div>
    </section>
</main>


    <?php

    require_once("../componentes/footer.php");

    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>