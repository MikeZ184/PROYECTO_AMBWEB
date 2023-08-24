<?php

if (isset($_GET['idFactura'])) {
    $idFactura = $_GET['idFactura'];

    // Incluir la función deleteUsuario() desde usuarios.php
    require_once '../DAL/facturas.php';
    $resultado = deleteFactura($idFactura);

    if ($resultado) {
        // Redirigir a consulta-datos.php si la eliminación fue exitosa
        header('Location: consulta-facturas.php');
        exit;
    } else {
        // Manejar el error de eliminación
        echo "Hubo un error al eliminar el producto.";
        exit;
    }
} else {
    // Si no se proporcionó el ID del usuario, redirigir a consulta-datos.php
    header('Location: consulta-facturas.php');
    exit;
}
?>