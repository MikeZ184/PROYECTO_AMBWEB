
<!DOCTYPE html>
<html>
<?php include '../include/templates/head.php'; ?>
<?php include '../include/templates/headerAdmin.php'; ?>

<link rel="stylesheet" href="../css/indexAdmin.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<body>
    <div class="container mt-4">
        <h2>Tabla de Usuarios</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Incluir la función ReturnUsuarios()
                require_once '../DAL/usuarios.php';

                // Obtener todos los usuarios
                $usuarios = ReturnUsuarios();

                if ($usuarios) {
                    foreach ($usuarios as $usuario) {
                        echo "<tr>";
                        echo "<td>" . $usuario['id'] . "</td>";
                        echo "<td>" . $usuario['nombre'] . "</td>";
                        echo "<td>" . $usuario['apellido'] . "</td>";
                        echo "<td>" . $usuario['email'] . "</td>";
                        echo "<td><a class='btn btn-danger' href='eliminar-usuario.php?id=" . $usuario['id'] . "'>Eliminar</a></td>";
                        echo "<td><a class='btn btn-danger' href='formActualizarUsuarios.php?id=" . $usuario['id'] . "'>Actualizar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron usuarios.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Incluir los archivos de Bootstrap (JS) para funcionalidades adicionales -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php include '../include/templates/footer.php'; ?>
    
</body>
</html>
