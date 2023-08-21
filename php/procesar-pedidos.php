<?php

    require_once '../include/fuciones/recogeRequest.php';
    $nombre = recogePost("nombre");
    $apellido = recogePost("apellido");
    $correo = recogePost("correo");
    $contrasena = recogePost("contrasena");

    // Generar el hash de la contraseña // Ver con Mike
    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    $nombreOK = false;
    $apellidoOK = false;
    $correoOK = false;
    $contrasenaOK = false;

    if($nombre === ""){
        $errores[] = "No digito el nombre del usuario";
    }else{
        $nombreOK = true;
    }

    if($apellido === ""){
        $errores[] = "No digito el apellido del usuario";
    }else{
        $apellidoOK = true;
    }

    if($correo === ""){
        $errores[] = "No digito el correo del usuario";
    }else{
        $correoOK = true;
    }

    if($contrasena === ""){
        $errores[] = "No digito la contraseña";
    }else{
        $contrasenaOK = true;
    }

    if($nombreOK && $apellidoOK && $correoOK && $contrasenaOK){
        //ingresar los datos a base de datos
        require_once '../DAL/usuarios.php';

        echo "Registro exitoso";

        if(InsercionUsuario($nombre, $apellido, $correo)){
            header("Location: ../html/inicioSesion.php");

        }else{
            echo "Error!";
        }
    }



?>