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
    </header>s

<?php


if ($con) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $consulta= "DELETE FROM carteras WHERE id='$id'"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1 class='titulo-eliminar'>La cartera fue Eliminada exitosamente!   <a href=index.php >Volver</a> </h1>";
        

    }
}

?>


<?php
require_once("../componentes/footer.php");
?>