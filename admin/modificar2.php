<?php

require_once("../componentes/conexion.php");
include_once("../componentes/header.php");

if ($con) {
    if (isset($_POST['cartera']) && isset($_POST['pre']) && isset($_POST['id']) && isset($_POST['desc'])) {
        $id = $_POST['id'];
        $cartera = $_POST['cartera'];
        $precio = $_POST['pre'];
        $descripcion = $_POST['desc'];

        // Inicializar variables para las imágenes
        $imagen_nombre = '';
        $imagen1_nombre = '';
        $imagen2_nombre = '';

        $carga_exito = true;

        // Manejo del archivo de imagen principal
        if (isset($_FILES['arch']) && $_FILES['arch']['error'] == 0) {
            $imagen_temporal = $_FILES['arch']['tmp_name'];
            $imagen_nombre = time() . '.jpg';
            $ruta_destino = "../img/$imagen_nombre";
            if (!move_uploaded_file($imagen_temporal, $ruta_destino)) {
                print "<h1>Error al cargar la imagen principal</h1>";
                $carga_exito = false;
            }
        } else {
            $carga_exito = false; // La carga de la imagen principal es obligatoria
        }

        // Manejo del primer archivo de imagen adicional
        if (isset($_FILES['arch1']) && $_FILES['arch1']['error'] == 0) {
            $imagen1_temporal = $_FILES['arch1']['tmp_name'];
            $imagen1_nombre = time() . '_1.jpg';
            $ruta_destino1 = "../img/$imagen1_nombre";
            if (!move_uploaded_file($imagen1_temporal, $ruta_destino1)) {
                print "<h1>Error al cargar la primera imagen adicional</h1>";
                $carga_exito = false;
            }
        } else {
            print "<h1>Debe cargar la primera imagen adicional</h1>";
            $carga_exito = false;
        }

        // Manejo del segundo archivo de imagen adicional
        if (isset($_FILES['arch2']) && $_FILES['arch2']['error'] == 0) {
            $imagen2_temporal = $_FILES['arch2']['tmp_name'];
            $imagen2_nombre = time() . '_2.jpg';
            $ruta_destino2 = "../img/$imagen2_nombre";
            
        }

        // Solo actualizar la base de datos si todas las imágenes requeridas se cargaron exitosamente
        if ($carga_exito) {
            // Consulta para actualizar los datos en la base de datos
            $consulta = "UPDATE carteras SET cartera='$cartera', precio='$precio', descripcion='$descripcion'";

            // Añadir imágenes solo si se cargaron
            if ($imagen_nombre) $consulta .= ", imagen='$imagen_nombre'";
            if ($imagen1_nombre) $consulta .= ", imagen1='$imagen1_nombre'";
            if ($imagen2_nombre) $consulta .= ", imagen2='$imagen2_nombre'";

            $consulta .= " WHERE id='$id'";

            $resultado = mysqli_query($con, $consulta);

            if ($resultado) {
                print "<h1 class='titulo-modificar'>La cartera fue modificada exitosamente por $cartera <a href='../index.php'>Volver</a></h1>";
            } else {
                print "<p>Error al ejecutar la consulta: " . mysqli_error($con) . "</p>";
            }
        }
    }
}

?>

<?php
require_once("../componentes/footer.php");
?>
