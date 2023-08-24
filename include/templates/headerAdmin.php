<header>
        <div class="logo">
            <a href="index.html" class="active">
                <img src="../img/log.png" alt="Logo de la página">
            </a>
        </div>
        <!-- <nav class="navbar">
            <a href="../html/consulta-datos.php">+Usuarios</a>
            <a href="../html/consulta-datos.php">Admin Usuarios</a>
            <a href="../html/catalogo.html">+Productos</a>
            <a href="../html/consulta-datos.php">Admin Productos</a>
            <a href="../html/inicioSesion.php">Cerrar Sesión</a>
        </nav> -->

        <nav class="navbar">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Usuarios
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../html/registroDB.php">Agregar Usuarios</a></li>
                  <li><a class="dropdown-item" href="../html/consulta-datos.php">Administrar Usuarios</a></li>
                </ul>
              </div>

              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Productos
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../html/registroProductos.php">Agregar Productos</a></li>
                  <li><a class="dropdown-item" href="../html/consulta-productos.php">Administrar Productos</a></li>
                </ul>
              </div>

              <a href="../html/inicioSesion.php">Cerrar Sesión</a>
        </nav>

    </header>