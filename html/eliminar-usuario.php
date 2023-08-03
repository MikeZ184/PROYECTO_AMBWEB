<?php
// eliminar-usuario.php

if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];

    // Incluir la función deleteUsuario() desde usuarios.php
    require_once '../DAL/usuarios.php';
    $resultado = deleteUsuario($idUsuario);

    if ($resultado) {
        // Redirigir a consulta-datos.php si la eliminación fue exitosa
        header('Location: consulta-datos.php');
        exit;
    } else {
        // Manejar el error de eliminación
        echo "Hubo un error al eliminar el usuario.";
        exit;
    }
} else {
    // Si no se proporcionó el ID del usuario, redirigir a consulta-datos.php
    header('Location: consulta-datos.php');
    exit;
}
?>