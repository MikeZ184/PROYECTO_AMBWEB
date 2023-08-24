<?php

    require_once '../include/fuciones/recogeRequest.php';
    $nombre = recogePost("nombre");
    $apellido = recogePost("apellido");
    $correo = recogePost("correo");
    $hashed_password = recogePost("password");

    // Generar el hash de la contraseña // Ver con Mike
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

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

    if($hashed_password === ""){
        $errores[] = "No digito la contraseña";
    }else{
        $hashed_passwordOK = true;
    }

    if($nombreOK && $apellidoOK && $correoOK && $hashed_passwordOK){
        //ingresar los datos a base de datos
        require_once '../DAL/usuarios.php';
        var_dump($nombre, $apellido, $correo, $hashed_password);


        echo "Registro exitoso";

        if(InsercionUsuario($nombre, $apellido, $correo, $hashed_password)){
            header("Location: ../html/inicioSesion.php");

        }else{
            echo "Error!";
        }
    }



?>