<?php

require_once("../componentes/conexion.php");

?>
<header>
        <nav class='navbar navbar-expand-lg bg-dark navbar-dark'>
            <div class='container-fluid'>
                <!-- Logo a la izquierda -->
                <a class='navbar-brand' href='#'>
                    <img src='../img/logoAdha.png' alt='Logo' height='140'>
                </a>

                <!-- Contenedor de búsqueda -->
                <form class='d-flex mx-auto search-container'>
                    <div class='input-group'>
                        <input id='search-bar' class='form-control' type='search' placeholder='¿Qué estás buscando?' aria-label='Buscar'>
                        <button class='btn btn-search' type='submit'>
                            <i class='fa-solid fa-search'></i>
                        </button>
                    </div>
                </form>

                <!-- Carrito, Login y Menú hamburguesa a la derecha -->
                <div class='d-flex align-items-center'>
                    <a href='../carrito.php' class='nav-link'>
                        <i class='fa-solid fa-cart-shopping'></i>
                    </a>
                    <a href='../paginas/login.php' class='nav-link'>
                        <i class='fa-solid fa-user'></i>
                    </a>

                    <!-- Botón menú hamburguesa -->
                    <button class='navbar-toggler ms-2' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav'
                        aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Segunda barra de navegación con las secciones -->
        <nav class='navbar navbar-expand-lg bg-dark navbar-dark'>
            <div class='container-fluid'>
                <div class='collapse navbar-collapse justify-content-center' id='navbarNav'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <a class='nav-link' href='../index.php'>Inicio</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='../paginas/productos.php'>Productos</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='../paginas/preguntas.php'>Preguntas Frecuentes</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='../paginas/contacto.php'>Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <?php


if ($con) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

         $consulta = "SELECT * FROM carteras WHERE id='$id'";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            $filas = mysqli_fetch_array($resultado);

            if ($filas) {  
                print "
                    <h1 class='Carteras'> Modificando la Cartera: $filas[cartera] </h1>
                    <form action='modificar2.php' method='post' enctype='multipart/form-data' class='admin-form'>
                    
                    <div class='mb-3'>
                        <label for='id' class='form-label'></label>
                        <input type='hidden' class='form-control' id='cartera' name='id' value='$filas[id]'> 
                    </div>
                    
                    <div class='mb-3'>
                        <label for='cartera' class='form-label'> Cartera: </label>
                        <input type='text' class='form-control' id='cartera'   name='cartera' value='$filas[cartera]' required> 
                    </div>

                    <div class='mb-3'>
                            <label for='pre' class='form-label'> Precio: </label>
                            <input type='number' class='form-control' id='pre' name='pre' value='$filas[precio]' required>
                    </div>

                    <div class='mb-3'>
                            <label for='desc' class='form-label'>Descripción:</label>
                            <textarea class='form-control' id='desc' name='desc' required></textarea> <!-- Nuevo campo -->
                    </div>

                    <div class='mb-3'>
                            <label for='arch' class='form-label'> Cargar Imagen: </label>
                            <input type='file' class='form-control' id='arch' name='arch' value='$filas[imagen]' required>
                    </div>

                     <div class='mb-3'>
                            <label for='arch' class='form-label'> Cargar Imagen: </label>
                            <input type='file' class='form-control' id='arch1' name='arch1' value='$filas[imagen1]' required>
                    </div>

                     <div class='mb-3'>
                            <label for='arch' class='form-label'> Cargar Imagen: </label>
                            <input type='file' class='form-control' id='arch2' name='arch2' value='$filas[imagen2]' required>
                    </div>

                    <div class='mb-3'>
                            <label for='imagen' class='form-label'>Imagen actual:</label>
                    </div>

                    <div class='mb-3'>
                            <img src='../img/$filas[imagen]' alt='Imagen actual' style='width: 200px; height: 200px;'/>
                    </div>
                    <button type='submit' class='btn btn-primary'> Modificar Cartera </button>
                    </form>
                ";
            } else {
                print "<p> No se encuentra id:  $id.</p>";
            }
        } else {
            print "<p> Algo salio mal </p>";
        }
    }
}
?>


<?php
require_once("../componentes/footer.php");
?>



    