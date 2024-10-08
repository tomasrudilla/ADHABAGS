<?php
require_once("../componentes/conexion.php");

if ($con != NULL) {
    // Imprime el header al inicio
    print "
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
    ";

    print "
    <main>
    <h1 class='text-center'> PANEL ADMINISTRADOR </h1>
    ";

    // Consulta actualizada para incluir la columna `descripcion`
    $consulta = "SELECT id, cartera, precio, imagen, descripcion FROM carteras";
    $respuesta = mysqli_query($con, $consulta);

    print "<table class='table contenedor-tabla'>
    <thead>
      <tr>
        <th scope='col'>Cartera</th>
        <th scope='col'>Precio</th>
        <th scope='col'>Modificar</th>
        <th scope='col'>Eliminar</th>
      </tr>
    </thead>
    <tbody>
            ";

    while ($fila = mysqli_fetch_array($respuesta)) {
        print "
        <tr>
        <td>$fila[cartera]</td>
        <td>$$fila[precio]</td>
        <td><a href='modificar.php?id=$fila[id]'>Modificar</a></td>
        <td><a href='eliminar.php?id=$fila[id]'>Eliminar</a></td>
      </tr>
                
    ";
    }

    print "
    </tbody>
    </table>
                    </main>";
} else {
    print "
        <h1>Algo salió mal</h1>
        ";
}
?>

<form action="agregar.php" method="post" enctype="multipart/form-data" class="admin-form">
  <div class="mb-3">
    <label for="cartera" class="form-label">Cartera:</label>
    <input type="text" class="form-control" id="cartera" name="cartera" required> 
  </div>
  <div class="mb-3">
    <label for="pre" class="form-label">Precio:</label>
    <input type="number" class="form-control" id="pre" name="pre" required>
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Descripción:</label>
    <textarea class="form-control" id="desc" name="desc" required></textarea> <!-- Nuevo campo -->
  </div>
  <div class="mb-3">
    <label for="arch" class="form-label">Cargar Imagen:</label>
    <input type="file" class="form-control" id="arch" name="arch" required>
  </div>
  <div class="mb-3">
    <label for="arch1" class="form-label">Cargar Segunda Imagen:</label>
    <input type="file" class="form-control" id="arch1" name="arch1">
  </div>
  <div class="mb-3">
    <label for="arch2" class="form-label">Cargar Tercer Imagen:</label>
    <input type="file" class="form-control" id="arch2" name="arch2">
  </div>
 
  <button type="submit" class="btn btn-primary">Cargar Producto</button>
</form>

<a class="volver" href="../index.php">Ir al inicio</a>

<?php
require_once("../componentes/footer.php");
?>
