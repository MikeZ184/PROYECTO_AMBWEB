<?php

    require_once '../include/fuciones/recogeRequest.php';
    $nombre = recogePost("nombre");
    $apellido = recogePost("apellido");
    $correo = recogePost("correo");

    $nombreOK = false;
    $apellidoOK = false;
    $correoOK = false;

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

    if($nombreOK && $apellidoOK && $correoOK){
        //ingresar los datos a base de datos
        require_once '../DAL/usuarios.php';
        if(InsercionUsuario($nombre, $apellido, $correo)){
            header("Location: ../html/consulta-datos.php");

        }else{
            echo "Error!";
        }
    }



?>