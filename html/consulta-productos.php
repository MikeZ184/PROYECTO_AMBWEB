<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <!-- Incluir los archivos de Bootstrap (CSS) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tabla de Productos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Incluir la función ReturnUsuarios()
                require_once '../DAL/productos.php';

                // Obtener todos los usuarios
                $productos = ReturnProductos();

                if ($productos) {
                    foreach ($productos as $producto) {
                        echo "<tr>";
                        echo "<td>" . $producto['idProducto'] . "</td>";
                        echo "<td>" . $producto['nombre'] . "</td>";
                        echo "<td>" . $producto['descripcion'] . "</td>";
                        echo "<td>" . $producto['precio'] . "</td>";
                        echo "<td><a class='btn btn-danger' href='eliminar-producto.php?idProducto=" . $producto['idProducto'] . "'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron productos.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Incluir los archivos de Bootstrap (JS) para funcionalidades adicionales -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    
</body>
</html>