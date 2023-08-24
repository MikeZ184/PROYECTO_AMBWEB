<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $idFactura = $_POST['idFactura']; // Recuperar el idProducto oculto
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $monto = $_POST['monto'];

    // Llama a la función updateProducto
    require_once '../DAL/facturas.php';
    $resultado = updateFactura($idFactura, $nombre, $descripcion, $monto);

    if ($resultado) {
        // Redirigir a consulta-productos.php si la actualización fue exitosa
        header('Location: consulta-facturas.php');
        exit;
    } else {
        // Manejar el error de actualización
        echo "Hubo un error al actualizar el producto.";
        exit;
    }
} else {
    // Si no se envió una solicitud POST, redirigir o mostrar un mensaje de error.
    echo "Solicitud no válida.";
    exit;
}
?>