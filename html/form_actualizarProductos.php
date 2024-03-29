<?php
require_once '../DAL/productos.php';

$idProducto = intval($_GET['idProducto']);

// Llama a la función para obtener los datos del producto
$producto = GetProductos($idProducto);

// Verifica si se encontró el producto
if (!$producto) {
    // Mostrar un mensaje de error en lugar de redireccionar
    $error = "El producto no se encontró.";
    // Puedes personalizar este mensaje según tus necesidades.
}

// Variables para los datos del producto
$nombre = isset($producto['nombre']) ? $producto['nombre'] : '';
$descripcion = isset($producto['descripcion']) ? $producto['descripcion'] : '';
$precio = isset($producto['precio']) ? $producto['precio'] : '';

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

                <form action="actualizar-productos.php" method="POST">
                        <h2>Productos</h2>
                        <input type="hidden" name="idProducto" value="<?php echo $idProducto; ?>">
                        <div class="form-outline mb-4">
                        <input type="text" name="nombre" class="form-control form-control-lg"
                            placeholder="Nombre" value="<?php echo $nombre; ?>" />
                        <label class="form-label" for="nombre"></label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="descripcion" class="form-control form-control-lg"
                            placeholder="Descripcion" value="<?php echo $descripcion; ?>" />
                        <label class="form-label" for="descripcion"></label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="number" name="precio" class="form-control form-control-lg"
                            placeholder="Precio" value="<?php echo $precio; ?>" />
                        <label class="form-label" for="precio"></label>
                    </div>
                        
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-success btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Actualizar</button>
                            <a href="../html/consulta-productos.php" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Ver Productos</a>
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