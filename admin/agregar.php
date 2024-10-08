<?php

require_once("../componentes/conexion.php");
require_once("../componentes/header.php");

if ($con != NULL) {
    if (isset($_POST['cartera']) && isset($_POST['pre']) && isset($_POST['desc'])) {
        $cartera = $_POST['cartera'];
        $precio = $_POST['pre'];
        $descripcion = $_POST['desc']; // Captura la descripción
        
        // Manejo de archivos de imagen
        $hora = time();
        $foto = $hora . '.jpg';
        $foto1 = $hora . '_1.jpg';
        $foto2 = $hora . '_2.jpg';

        $carga_exito = true;

        // Manejo del archivo de imagen principal
        if (isset($_FILES['arch']) && $_FILES['arch']['error'] == UPLOAD_ERR_OK) {
            if (!move_uploaded_file($_FILES['arch']['tmp_name'], "../img/$foto")) {
                print "<h1>Error al cargar la imagen principal</h1>";
                $carga_exito = false;
            }
        } else {
            print "<h1>Error al cargar la imagen principal: " . $_FILES['arch']['error'] . "</h1>";
            $carga_exito = false;
        }

        // Manejo del primer archivo de imagen adicional
        if (isset($_FILES['arch1']) && $_FILES['arch1']['error'] == UPLOAD_ERR_OK) {
            if (!move_uploaded_file($_FILES['arch1']['tmp_name'], "../img/$foto1")) {
                print "<h1>Error al cargar la primera imagen adicional</h1>";
                $carga_exito = false;
            }
        } else {
            print "<h1>Error al cargar la primera imagen adicional: " . $_FILES['arch1']['error'] . "</h1>";
            $carga_exito = false;
        }

        // Manejo del segundo archivo de imagen adicional
        if (isset($_FILES['arch2']) && $_FILES['arch2']['error'] == UPLOAD_ERR_OK) {
            if (!move_uploaded_file($_FILES['arch2']['tmp_name'], "../img/$foto2")) {
                print "<h1>Error al cargar la segunda imagen adicional</h1>";
                $carga_exito = false;
            }
        } 

        if ($carga_exito) {
            // Consulta para insertar datos en la base de datos
            $consulta = "INSERT INTO carteras (cartera, precio, imagen, imagen1, imagen2, descripcion) VALUES ('$cartera', '$precio', '$foto', '$foto1', '$foto2', '$descripcion')";

            // Ejecución de la consulta
            $respuesta = mysqli_query($con, $consulta);

            if ($respuesta) {
                header("Location: ../paginas/productos.php");
            } else {
                print "<h1>Error al insertar los datos</h1>";
            }
        }
    } else {
        print "<h1>Faltan datos en el formulario</h1>";
    }
} else {
    print "<h1>Algo salió mal</h1>";
}
?>
