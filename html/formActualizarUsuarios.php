<?php
require_once '../DAL/usuarios.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;



if ($id <= 0) {
    // Si $id no es válido, puedes redirigir a una página de error o tomar alguna otra acción.
    echo "ID no válido.";
    exit;
}

// Llama a la función para obtener los datos del producto
$usuario = GetUsuarios($id);

// Verifica si se encontró el producto
if (!$usuario) {
    // Mostrar un mensaje de error en lugar de redireccionar
    $error = "El usuario no se encontró.";
    // Puedes personalizar este mensaje según tus necesidades.
}

// Variables para los datos del producto
$nombre = isset($usuario['nombre']) ? $usuario['nombre'] : '';
$apellido = isset($usuario['apellido']) ? $usuario['apellido'] : '';
$email = isset($usuario['email']) ? $usuario['email'] : '';
$password = isset($usuario['password']) ? $usuario['password'] : '';





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Productos</title>
    <link rel="stylesheet" href="../css/registroProductos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-auto">
                <div class="col-md-3 col-lg-3 col-xl-2">
                    <a href="index.html">
                        <img src="../img/Logo Proyecto.jpg" class="img-fluid" alt="Sample image">
                    </a>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form action="actualizar-usuarios.php" method="POST">
                        <h2>Usuario</h2>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-outline mb-4">
                        <input type="text" name="nombre" class="form-control form-control-lg"
                            placeholder="Nombre" value="<?php echo $nombre; ?>" />
                        <label class="form-label" for="nombre"></label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="apellido" class="form-control form-control-lg"
                            placeholder="Apellido" value="<?php echo $apellido; ?>" />
                        <label class="form-label" for="apellido"></label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="email" name="email" class="form-control form-control-lg"
                            placeholder="Correo" value="<?php echo $email; ?>" />
                        <label class="form-label" for="correo"></label>
                    </div>

                
                        
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-success btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Actualizar</button>
                            <a href="../html/consulta-datos.php" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Ver Productos</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer class="footer">Proyecto Desarrollo Web</footer>
</html>