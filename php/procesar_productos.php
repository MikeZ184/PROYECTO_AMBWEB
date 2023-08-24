<?php

    require_once '../include/fuciones/recogeRequest.php';
    $nombre = recogePost("nombre");
    $descripcion = recogePost("descripcion");
    $precio = recogePost("precio");

    $nombreOK = false;
    $descripcionOK = false;
    $precioOK = false;

    if($nombre === ""){
        $errores[] = "No digito el nombre del usuario";
    }else{
        $nombreOK = true;
    }

    if($descripcion === ""){
        $errores[] = "No ingreso la descripcion";
    }else{
        $descripcionOK = true;
    }

    if($precio === ""){
        $errores[] = "No digito el precio del producto";
    }else{
        $precioOK = true;
    }

    if($nombreOK && $descripcionOK && $precioOK){
        //ingresar los datos a base de datos
        require_once '../DAL/productos.php';
        var_dump($nombre, $descripcion, $precio);


        echo "Registro exitoso";

        if(InsercionProducto($nombre, $descripcion, $precio)){
            header("Location: ../html/consulta-productos.php");

        }else{
            echo "Error!";
        }
    }



?>