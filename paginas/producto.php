<?php
require_once("../componentes/conexion.php"); // Incluye la conexión a la base de datos

$id_producto = isset($_GET['id']) ? intval($_GET['id']) : 0;
$consulta = "SELECT id, cartera, precio, descripcion, imagen, imagen1, imagen2 FROM carteras WHERE id = $id_producto";
$resultado = mysqli_query($con, $consulta);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $producto = mysqli_fetch_assoc($resultado);
} else {
    echo "<p>Producto no encontrado.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($producto['cartera']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        <input id="search-bar" class="form-control" type="search" placeholder="¿Qué estás buscando?"
                            aria-label="Buscar">
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
                    <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
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
        <section class="container mt-4">
            <h1 class="titulo-producto"><?php echo htmlspecialchars($producto['cartera']); ?></h1>
            <div class="row">
                <div class="col-md-6">
                    <!-- Carousel de Imágenes -->
                    <div id="productCarousel" class="carousel slide">
    <div class="carousel-inner">
        <?php if (!empty($producto['imagen'])): ?>
            <div class="carousel-item active carousel-item-producto">
                <img src="../img/<?php echo htmlspecialchars($producto['imagen']); ?>" class="d-block w-100" alt="Imagen del Producto">
            </div>
        <?php endif; ?>
        <?php if (!empty($producto['imagen1'])): ?>
            <div class="carousel-item carousel-item-producto <?php echo empty($producto['imagen']) ? 'active' : ''; ?>">
                <img src="../img/<?php echo htmlspecialchars($producto['imagen1']); ?>" class="d-block w-100" alt="Imagen Adicional">
            </div>
        <?php endif; ?>
        <?php if (!empty($producto['imagen2'])): ?>
            <div class="carousel-item carousel-item-producto <?php echo empty($producto['imagen']) && empty($producto['imagen1']) ? 'active' : ''; ?>">
                <img src="../img/<?php echo htmlspecialchars($producto['imagen2']); ?>" class="d-block w-100" alt="Imagen Adicional">
            </div>
        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

                </div>
                <div class="col-md-6">
                    <p class="lead"><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                    <p><strong>Precio:</strong> $<?php echo number_format((float) $producto['precio'], 0, '.', '.'); ?>
                    </p> <!-- Cambiado aquí -->

                    <div class="botones-container">
                        <a href="../componentes/agregar_carrito.php?id=<?php echo htmlspecialchars($producto['id']); ?>"
                            id="addToCartButton" class="boton-agregar">
                            Agregar al carrito
                        </a>

                        <a href="productos.php" class="boton-volver">
                            <i class="fas fa-arrow-left"></i> <!-- Ícono de Font Awesome -->
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <a href="https://wa.me/tuNumeroDeTelefono" class="whatsapp-icon" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <?php require_once("../componentes/footer.php"); ?>

    <script src="https://kit.fontawesome.com/57817a8ec1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../cart.js"></script> <!-- Añade esta línea para incluir el archivo cart.js -->
</body>

</html>