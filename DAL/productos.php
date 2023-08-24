<?php

require_once "conexion.php";

// Verificar si se recibió la solicitud de eliminación por AJAX
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["idProducto"])) {
    $idUsuario = $_POST["idProducto"];
    $resultado = deleteProducto($idProducto);

    // Devolver una respuesta a la solicitud AJAX
    if ($resultado) {
        echo "success";
    } else {
        echo "error";
    }

    // Terminar la ejecución del archivo, ya que no se necesita más procesamiento
    exit;
}

function InsercionProducto($pNombre, $pDescripcion, $pPrecio) {
    $retorno = false;

    try {
        $conexion = Conecta();

        //formato de datos utf8
        if(mysqli_set_charset($conexion, "utf8")){
            $stmt = $conexion->prepare("INSERT INTO productos(nombre, descripcion, precio) values (?, ?, ?)");
            $stmt->bind_param("sss", $iNombre, $iDescripcion, $iPrecio);

            //set parametros y ejecutar
            $iNombre = $pNombre;
            $iDescripcion = $pDescripcion;
            $iPrecio = $pPrecio;

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


function ReturnProductos() {
    try {
        $conexion = Conecta();

        // Formato de datos utf8
        mysqli_set_charset($conexion, "utf8");

        $stmt = $conexion->prepare("SELECT idProducto, nombre, descripcion, precio FROM productos");

        if ($stmt->execute()) {
            $resultado = $stmt->get_result();
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;
        }
    } catch (\Throwable $th) {
        //throw $th;

    } finally {
        Desconecta($conexion);
    }

    return null; // En caso de error o no se encuentren registros
}


function deleteProducto($idProducto) {
    try {
        $conexion = Conecta();

        // Formato de datos utf8
        mysqli_set_charset($conexion, "utf8");

        $stmt = $conexion->prepare("DELETE FROM productos WHERE idProducto = ?");
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