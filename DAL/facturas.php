<?php

require_once "conexion.php";


function InsercionFactura($pNombre, $pDescripcion, $pMonto) {
    $retorno = false;

    try {
        $conexion = Conecta();

        //formato de datos utf8
        if(mysqli_set_charset($conexion, "utf8")){
            $stmt = $conexion->prepare("INSERT INTO facturas(nombre, descripcion, monto) values (?, ?, ?)");
            $stmt->bind_param("sss", $iNombre, $iDescripcion, $iMonto);

            //set parametros y ejecutar
            $iNombre = $pNombre;
            $iDescripcion = $pDescripcion;
            $iMonto = $pMonto;

            if($stmt->execute()){
                $retorno = true;
            }else{
                echo "Error en la insercion:" . $stmt->error;
            }
        }
    } catch (\Throwable $th) {
        //throw $th;

    }finally{
        Desconecta($conexion);
    }
    return $retorno;

}


function ReturnFacturas() {
    try {
        $conexion = Conecta();

        // Formato de datos utf8
        mysqli_set_charset($conexion, "utf8");

        $stmt = $conexion->prepare("SELECT idFactura, nombre, descripcion, monto FROM facturas");

        if ($stmt->execute()) {
            $resultado = $stmt->get_result();
            $facturas = $resultado->fetch_all(MYSQLI_ASSOC);
            return $facturas;
        }
    } catch (\Throwable $th) {
        //throw $th;

    } finally {
        Desconecta($conexion);
    }

    return null; // En caso de error o no se encuentren registros
}

function GetFacturas($idFactura) {
    try {
        $conexion = Conecta();

        // Formato de datos utf8
        mysqli_set_charset($conexion, "utf8");

        $stmt = $conexion->prepare("SELECT idFactura, nombre, descripcion, monto FROM facturas WHERE idFactura = ?");
        $stmt->bind_param("i", $idFactura);

        if ($stmt->execute()) {
            $resultado = $stmt->get_result();

            // Verificar si se encontraron resultados
            if ($resultado->num_rows === 0) {
                return [];
            }

            $facturas = $resultado->fetch_assoc();
            $stmt->close(); // Cerrar la sentencia preparada

            return $facturas;
        }
    } catch (\Throwable $th) {
        // Registrar el error en un archivo de registro o mostrar un mensaje de error
        error_log("Error en GetFacturas: " . $th->getMessage());
    } finally {
        Desconecta($conexion);
    }

    return null; // En caso de error
}



function deleteFactura($idFactura) {
    try {
        $conexion = Conecta();

        // Formato de datos utf8
        mysqli_set_charset($conexion, "utf8");

        $stmt = $conexion->prepare("DELETE FROM facturas WHERE idFactura = ?");
        $stmt->bind_param("i", $idProducto);

        if ($stmt->execute()) {
            // Éxito en la eliminación
            return true;
        }
    } catch (\Throwable $th) {
        //throw $th;

    } finally {
        Desconecta($conexion);
    }

    return false; // En caso de error o no se pudo eliminar
}

function updateFactura($idFactura, $pNombre, $pDescripcion, $pMonto) {
    $retorno = false;

    try {
        $conexion = Conecta();

        // Formato de datos utf8
        mysqli_set_charset($conexion, "utf8");

        $stmt = $conexion->prepare("UPDATE facturas SET nombre = ?, descripcion = ?, monto = ? WHERE idFactura = ?");
        $stmt->bind_param("ssdi", $iNombre, $iDescripcion, $iMonto, $idFactura);

        // Setear los valores de los parámetros
        $iNombre = $pNombre;
        $iDescripcion = $pDescripcion;
        $iMonto = $pMonto;

        if ($stmt->execute()) {
            $retorno = true;
        } else {
            echo "Error en la actualización: " . $stmt->error;
        }

        $stmt->close(); // Cerrar el statement

    } catch (\Throwable $th) {
        // Manejar excepciones

    } finally {
        Desconecta($conexion);
    }

    return $retorno;
}