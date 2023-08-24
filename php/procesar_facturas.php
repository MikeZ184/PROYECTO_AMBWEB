<?php

    require_once '../include/fuciones/recogeRequest.php';
    $nombre = recogePost("nombre");
    $descripcion = recogePost("descripcion");
    $monto = recogePost("monto");

    $nombreOK = false;
    $descripcionOK = false;
    $montoOK = false;

    if($nombre === ""){
        $errores[] = "No digito el nombre de la factura";
    }else{
        $nombreOK = true;
    }

    if($descripcion === ""){
        $errores[] = "No ingreso la descripcion de la factura";
    }else{
        $descripcionOK = true;
    }

    if($monto === ""){
        $errores[] = "No digito el monto de la factura";
    }else{
        $montoOK = true;
    }

    if($nombreOK && $descripcionOK && $montoOK){
        //ingresar los datos a base de datos
        require_once '../DAL/facturas.php';
        var_dump($nombre, $descripcion, $monto);


        echo "Registro exitoso";

        if(InsercionProducto($nombre, $descripcion, $monto)){
            header("Location: ../html/consulta_facturas.php");

        }else{
            echo "Error!";
        }
    }



?>