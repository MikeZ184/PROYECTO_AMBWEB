
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $idProducto = $_POST['idProducto']; // Recuperar el idProducto oculto
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    // Llama a la función updateProducto
    require_once '../DAL/productos.php';
    $resultado = updateProducto($idProducto, $nombre, $descripcion, $precio);

    if ($resultado) {
        // Redirigir a consulta-productos.php si la actualización fue exitosa
        header('Location: consulta-productos.php');
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
