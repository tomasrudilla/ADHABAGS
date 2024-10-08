<?php
require_once("../componentes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Destinatario
    $destinatario = "tomasrudilla@gmail.com";

    // Asunto del correo
    $asuntoCorreo = "Formulario de contacto: " . $asunto;

    // Cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Asunto: $asunto\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar el correo
    if (mail($destinatario, $asuntoCorreo, $cuerpoMensaje, $headers)) {
        $mensajeExito = "Mensaje enviado correctamente.";
    } else {
        $mensajeError = "Error al enviar el mensaje.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteras - Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5P1dc2D7d+yFtvjbqCFSI6W0cD5Z//kPyWyXUO+FvCBw==" crossorigin="anonymous">
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

<main>
<h1 class="titulo-contacto"> Contáctanos: </h1>
     <div class="contenedor">
        
        <div class="formulario">
            <?php if (isset($mensajeExito)): ?>
                <div class="alert alert-success">
                    <?= $mensajeExito ?>
                </div>
            <?php elseif (isset($mensajeError)): ?>
                <div class="alert alert-danger">
                    <?= $mensajeError ?>
                </div>
            <?php endif; ?>
            
            <form class="custom-form" method="post" action="">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto:</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje:</label>
                    <textarea id="mensaje" class="form-control" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <div class="imagen">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26243.09714835597!2d-58.38828499353185!3d-34.695414031078585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1725049411940!5m2!1ses-419!2sar" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</main>

<?php
require_once("../componentes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-om2jN5AHKfEckNzUtU6rcY2n0H2UkDRkXPaZQTLf8YVt7u14u7xZPA1gvx9P8ziv" crossorigin="anonymous"></script>
</body>
</html>
