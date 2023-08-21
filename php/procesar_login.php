<?php

    require_once '../include/fuciones/recogeRequest.php';

    $correo = recogePost("correo");
    $contrasena = recogePost("contrasena");

    $correoOK = false;
    $contrasenaOK = false;

    if($correo === ""){
        $errores[] = "No digito el correo del usuario";
    }else{
        $correoOK = true;
    }

    if($contrasena === ""){
        $errores[] = "No digito la contraseña";
    }else{
        $apellidoOK = true;
    }

    // Ver con Mike: esto segun DB, porque esto es de chatgpt (Hay 2 procesar-pedidos, creo que uno hay que borrarlo)
    $sql = "SELECT hashed_password FROM usuarios WHERE correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["hashed_password"];

        // Verificar la contraseña ingresada con el hash almacenado
        if (password_verify($contrasena, $hashed_password)) {
            echo "Inicio de sesión exitoso";
            // Creo que aqui se haria lo de los roles para redirigir con un if, si es admin o cliente
            if ($correoOK === "admin@admin.com") {
                header("Location: ../html/index.html");
            }else {
                header("Location: ../html/index.html");
            }
        } else {
            echo "Credenciales inválidas";
        }
    }


?>
