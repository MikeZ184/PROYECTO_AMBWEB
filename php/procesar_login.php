<?php

    require_once '../include/fuciones/recogeRequest.php';

    $correo = recogePost("correo");
    $hashed_password = recogePost("password");

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
        

        if(ValidarUsuario($correo, $hashed_password)){
            header("Location: ../html/index.html");

        }else{
            echo "Error!";
        }
    }


?>
