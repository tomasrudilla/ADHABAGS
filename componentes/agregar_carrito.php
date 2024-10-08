
<?php
session_start();  // Inicia la sesión

// Verifica si se ha recibido un ID válido
if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];

    // Verifica si el carrito ya está en la sesión
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();  // Crea el carrito si no existe
    }

    // Agrega el producto al carrito (incrementa la cantidad si ya existe)
    if (isset($_SESSION['carrito'][$id_producto])) {
        $_SESSION['carrito'][$id_producto]++;
    } else {
        $_SESSION['carrito'][$id_producto] = 1;
    }

    // Redirige al usuario de vuelta a la página de productos (o a donde prefieras)
    header("Location: carrito.php");
    exit();
} else {
    // Redirige si no se recibió un ID válido
    header("Location: productos.php");
    exit();
}
