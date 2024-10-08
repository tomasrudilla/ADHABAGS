<?php
session_start();
require_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo4.png" alt="Logo" height="140">
            </a>
            <form class="d-flex mx-auto search-container">
                <div class="input-group">
                    <input id="search-bar" class="form-control" type="search" placeholder="¿Qué estás buscando?" aria-label="Buscar">
                    <button class="btn btn-search" type="submit">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </div>
            </form>
            <div class="d-flex align-items-center">
                <a href="carrito.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <a href="paginas/login.php" class="nav-link">
                    <i class="fa-solid fa-user"></i>
                </a>
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="../paginas/productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="../paginas/preguntas.php">Preguntas Frecuentes</a></li>
                    <li class="nav-item"><a class="nav-link" href="../paginas/contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container mt-4">
    <i class="fa-solid fa-cart-shopping carrito">Tu carrito:</i>

    <?php
if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
    echo "<div class='table-responsive'>";
    echo "<table class='table'>";
    echo "<thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acción</th>
            </tr>
          </thead>
          <tbody>";

    $total_general = 0;

    foreach ($_SESSION['carrito'] as $id_producto => $cantidad) {
        $consulta = "SELECT cartera, precio FROM carteras WHERE id = $id_producto";
        $resultado = mysqli_query($con, $consulta);
        $producto = mysqli_fetch_assoc($resultado);

        $nombre_producto = $producto['cartera'];
        $precio_producto = floatval($producto['precio']); // Convertir a flotante
        $total_producto = $precio_producto * $cantidad;

        // Mostrar el precio sin centavos
        echo "<tr>
                <td>{$nombre_producto}</td>
                <td>{$cantidad}</td>
                <td>\$" . number_format($precio_producto, 0, ',', '.') . "</td> <!-- Cambiado para eliminar centavos -->
                <td><a href='eliminar_carrito.php?id={$id_producto}' class='btn btn-danger btn-sm'>Eliminar</a></td>
              </tr>";

        $total_general += $total_producto;
    }

    // Formatear el total general sin centavos
    echo "<tr><td colspan='3' class='text-end total-general'><strong>Total:</strong></td>
          <td class='total-general'>\$" . number_format($total_general, 0, '.', '.') . "</td></tr>"; // Cambiado para eliminar centavos
    echo "</tbody></table>";
    echo "</div>";

    // Mensaje y botón
    echo "<div class='message-box'>
            <p>Para finalizar la compra, envíanos una foto del carrito a nuestro WhatsApp. El botón te va a redirigir al mismo.</p>
            <a href='https://www.instagram.com/direct/t/17842014489300022/' class='whatsapp-carrito' target='_blank'>Enviar carrito por WhatsApp</a>
          </div>";

} else {
    echo "<p>Tu carrito está vacío.</p>";
}
?>

    <a href="../paginas/productos.php" class="btn btn-primary compra">Seguir comprando</a>
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
                    <img src="img/correoargentino.jpg" alt="Descripción de la imagen" style="width: 80px; height: auto; vertical-align: middle;">
                    <img src="img/andreani.png" alt="Descripción de la otra imagen" style="width: 120px; height: auto; vertical-align: middle;">
                </p>
                <p>Todos los medios de pago.
                    <img src="img/american.png" alt="Descripción de la imagen" style="width: 45px; height: auto; vertical-align: middle;">
                    <img src="img/cabal.png" alt="Descripción de la otra imagen" style="width: 45px; height: auto; vertical-align: middle;">
                    <img src="img/mastercard.png" alt="Descripción de la otra imagen" style="width: 45px; height: auto; vertical-align: middle;">
                    <img src="img/visadbito.png" alt="Descripción de la otra imagen" style="width: 45px; height: auto; vertical-align: middle;">
                    <img src="img/pagofacil.png" alt="Descripción de la otra imagen" style="width: 45px; height: auto; vertical-align: middle;">
                    <img src="img/rapipago.png" alt="Descripción de la otra imagen" style="width: 45px; height: auto; vertical-align: middle;">
                    <img src="img/tarjetashopping.png" alt="Descripción de la otra imagen" style="width: 45px; height: auto; vertical-align: middle;">
                    <img src="img/visa.png" alt="Descripción de la otra imagen" style="width: 45px; height: auto; vertical-align: middle;">
                    <img src="img/naranja.png" alt="Descripción de la otra imagen" style="width: 45px; height: auto; vertical-align: middle;">
                </p>
                <p>Compra con seguridad.
                    <img src="img/seguridada.png" alt="Descripción de la imagen" style="width: 40px; height: auto; vertical-align: middle;">
                </p>
            </div>
            <div class="col-md-6">
                <ul class="social-icons list-unstyled d-flex justify-content-end">
                    <li class="ms-3"><a class="text-light" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="ms-3"><a class="text-light" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="ms-3"><a class="text-light" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="ms-3"><a class="text-light" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <p class="copyright-text mb-0">Argentina &copy; 2022 Todos los derechos reservados por <a href="#">Adhabags</a>.</p>
            </div>
        </div>
    </div>
</footer>

<a href="https://wa.me/tuNumeroDeTelefono" class="whatsapp-float" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
