<?php
// eliminar-producto.php

if (isset($_GET['idProducto'])) {
    $idProducto = $_GET['idProducto'];

    // Incluir la función deleteUsuario() desde usuarios.php
    require_once '../DAL/productos.php';
    $resultado = deleteProducto($idProducto);

    if ($resultado) {
        // Redirigir a consulta-datos.php si la eliminación fue exitosa
        header('Location: consulta-productos.php');
        exit;
    } else {
        // Manejar el error de eliminación
        echo "Hubo un error al eliminar el producto.";
        exit;
    }
} else {
    // Si no se proporcionó el ID del usuario, redirigir a consulta-datos.php
    header('Location: consulta-productos.php');
    exit;
}
?>