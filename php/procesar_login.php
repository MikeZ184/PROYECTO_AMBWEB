<?php

    require_once '../include/fuciones/recogeRequest.php';

    $correo = recogePost("correo");
    $hashed_password = recogePost("password");

    $hashed_password = password_hash($hashed_password, PASSWORD_DEFAULT);

    $correoOK = false;
    $hashed_passwordOK = false;

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

    if($correoOK && $hashed_passwordOK){
        //ingresar los datos a base de datos
        require_once '../DAL/usuarios.php';
        var_dump($correo, $hashed_password);

        echo "Registro exitoso";
        

        if(ValidarUsuario($correo, $password)){
            if ($correo === "admin@gmail.com") {
                // Redirecciona a indexAdmin.html
                header("Location: ../html/indexAdmin.html");
            } else {
                // Redirecciona a index.html
                header("Location: ../html/index.html");
            }

        }else{
            echo "Error!";
        }
    }


?>
