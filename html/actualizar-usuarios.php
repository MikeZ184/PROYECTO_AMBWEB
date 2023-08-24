
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id']; // Recuperar el idProducto oculto
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    

    // Llama a la función updateProducto
    require_once '../DAL/usuarios.php';
    $resultado = updateUsuario($id, $nombre, $apellido, $email);

    if ($resultado) {
        // Redirigir a consulta-productos.php si la actualización fue exitosa
        header('Location: consulta-datos.php');
        exit;
    } else {
        // Manejar el error de actualización
        echo "Hubo un error al actualizar el usuario.";
        exit;
    }
} else {
    // Si no se envió una solicitud POST, redirigir o mostrar un mensaje de error.
    echo "Solicitud no válida.";
    exit;
}
?>
