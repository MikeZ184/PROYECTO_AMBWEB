<?php

require_once "conexion.php";

// Verificar si se recibió la solicitud de eliminación por AJAX
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["idUsuario"])) {
    $idUsuario = $_POST["idUsuario"];
    $resultado = deleteUsuario($idUsuario);

    // Devolver una respuesta a la solicitud AJAX
    if ($resultado) {
        echo "success";
    } else {
        echo "error";
    }

    // Terminar la ejecución del archivo, ya que no se necesita más procesamiento
    exit;
}

function InsercionUsuario($pNombre, $pApellido, $pCorreo, $pPassword) {
    $retorno = false;

    try {
        $conexion = Conecta();

        //formato de datos utf8
        if(mysqli_set_charset($conexion, "utf8")){
            $stmt = $conexion->prepare("INSERT INTO usuarios(nombre, apellido, email, password) values (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $iNombre, $iApellido, $iCorreo, $iPassword);

            //set parametros y ejecutar
            $iNombre = $pNombre;
            $iApellido = $pApellido;
            $iCorreo = $pCorreo;
            $iPassword = $pPassword;

            if($stmt->execute()){
                $retorno = true;
            }else{
                echo "Error en la insercion:" . $stmt->error;
            }
        }
    } catch (\Throwable $th) {
        //throw $th;
        //manejar tema de bitacora Apache
        //inserción a nivel de archivo
    }finally{
        Desconecta($conexion);
    }

    return $retorno;

}

function ValidarUsuario($correo, $password) {
    try {
        $conexion = Conecta();

        if (!$conexion) {
            die("Error de conexión a la base de datos.");
        }

        // Formato de datos utf8
        mysqli_set_charset($conexion, "utf8");

        // Realiza la consulta SQL para verificar las credenciales
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();

        // Aquí puedes imprimir las contraseñas
        echo "Contraseña almacenada: " . $usuario["password"];
        echo "Contraseña proporcionada: " . $password;

        if ($usuario && password_verify($password, $usuario["password"])) {
            // Las credenciales son correctas
            return true;
        } else {
            // Las credenciales son incorrectas
            return false;
        }
    } catch (\Throwable $th) {
        // Manejar tema de bitácora Apache o registrar el error en un archivo
        die("Error: " . $th->getMessage());
    } finally {
        Desconecta($conexion);
    }

    return false; // En caso de error o credenciales incorrectas
}





/*
function ReturnUsuario(){
    $retorno = "";
    try {
        $conexion = Conecta();
        $resultado = $conexion->query("select id, nombre, apellido, correo from usuarios");

        if($conexion->error != ""){
            echo "Ocurrió un error al ejecutar la consulta: $conexion->error";
        }

        ImprimirDatos($resultado);

    } catch (\Throwable $th) {
        //throw $th;
        //manejar tema de bitacora Apache
        //inserción a nivel de archivo
    }finally{
        Desconecta($conexion);
    } 
}

function ImprimirDatos($datos){
    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Correo</th>";
    echo "</tr>";

    if($datos->num_rows > 0){
        while ($row = $datos->fetch_assoc()){
            echo "<tr>";
            echo "<td>{$row['nombre']}</td>";
            echo "<td>{$row['apellido']}</td>";
            echo "<td>{$row['email']}</td>";

            

            echo "</tr>";
        }
    }else {
        echo "<tr><td>No hay registros de alumnos</td></tr>";
    }
    echo "</table>";
}*/

function ReturnUsuarios() {
    try {
        $conexion = Conecta();

        // Formato de datos utf8
        mysqli_set_charset($conexion, "utf8");

        $stmt = $conexion->prepare("SELECT id, nombre, apellido, email FROM usuarios");

        if ($stmt->execute()) {
            $resultado = $stmt->get_result();
            $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }
    } catch (\Throwable $th) {
        // Manejar tema de bitácora Apache o registrar el error en un archivo
        // error_log("Error: " . $th->getMessage(), 0);
    } finally {
        Desconecta($conexion);
    }

    return null; // En caso de error o no se encuentren registros
}


function deleteUsuario($idUsuario) {
    try {
        $conexion = Conecta();

        // Formato de datos utf8
        mysqli_set_charset($conexion, "utf8");

        $stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $idUsuario);

        if ($stmt->execute()) {
            // Éxito en la eliminación
            return true;
        }
    } catch (\Throwable $th) {
        // Manejar tema de bitácora Apache o registrar el error en un archivo
        // error_log("Error: " . $th->getMessage(), 0);
    } finally {
        Desconecta($conexion);
    }

    return false; // En caso de error o no se pudo eliminar
}


