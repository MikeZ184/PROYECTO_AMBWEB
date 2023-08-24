<?php
require_once '../DAL/facturas.php';

$idFactura = intval($_GET['idFactura']);
echo $idFactura;
// Llama a la función para obtener los datos del producto
$factura = GetFacturas($idFactura);

// Verifica si se encontró el producto
if (!$factura) {
    // Mostrar un mensaje de error en lugar de redireccionar
    $error = "La factura no se encontró.";
    // Puedes personalizar este mensaje según tus necesidades.
}

// Variables para los datos del producto
$nombre = isset($factura['nombre']) ? $factura['nombre'] : '';
$descripcion = isset($factura['descripcion']) ? $factura['descripcion'] : '';
$monto = isset($factura['monto']) ? $factura['monto'] : '';
echo $nombre;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Facturas</title>
    <link rel="stylesheet" href="../css/registroFacturas.css">
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

                <form action="actualizar-facturas.php" method="POST">
                        <h2>Facturas</h2>
                        <input type="hidden" name="idFactura" value="<?php echo $idFactura; ?>">
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
                        <input type="number" name="monto" class="form-control form-control-lg"
                            placeholder="Monto" value="<?php echo $monto; ?>" />
                        <label class="form-label" for="monto"></label>
                    </div>
                        
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-success btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Actualizar</button>
                            <a href="../html/consulta-facturas.php" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Ver Facturas</a>
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