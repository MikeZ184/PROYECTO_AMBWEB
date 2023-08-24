<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Facturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/indexAdmin.css">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>

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

              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Facturas
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../html/registroFacturas.php">Agregar Facturas</a></li>
                  <li><a class="dropdown-item" href="../html/consulta-facturas.php">Administrar Facturas</a></li>
                </ul>
              </div>
        </nav>

    </header>

    <div class="container mt-4">
        <h2>Tabla de Facturas</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Monto</th>
                    <th>Acciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Incluir la función ReturnUsuarios()
                require_once '../DAL/facturas.php';

                // Obtener todos los usuarios
                $facturas = ReturnFacturas();

                if ($facturas) {
                    foreach ($facturas as $factura) {
                        echo "<tr>";
                        echo "<td>" . $factura['idFactura'] . "</td>";
                        echo "<td>" . $factura['nombre'] . "</td>";
                        echo "<td>" . $factura['descripcion'] . "</td>";
                        echo "<td>" . $factura['monto'] . "</td>";
                        echo "<td><a class='btn btn-danger' href='eliminar_factura.php?idFactura=" . $factura['idFactura'] . "'>Eliminar</a></td>";
                        echo "<td><a class='btn btn-primary btn-lg' style='padding-left: 2.5rem; padding-right: 2.5rem;' href='form_actualizarFacturas.php?idFactura=" . $factura['idFactura'] . "'>Actualizar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron facturas.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="footer">Proyecto Desarrollo Web</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>