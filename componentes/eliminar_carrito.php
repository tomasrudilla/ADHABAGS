<?php
session_start();

// Verifica si se ha recibido un ID válido
if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];

    // Verifica si el producto está en el carrito
    if (isset($_SESSION['carrito'][$id_producto])) {
        unset($_SESSION['carrito'][$id_producto]);  // Elimina el producto del carrito
    }

    // Redirige de vuelta al carrito
    header("Location: carrito.php");
    exit();
} else {
    // Redirige si no se recibió un ID válido
    header("Location: carrito.php");
    exit();
}



