<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/inicioSesion.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-auto">
                <div class="col-md-3 col-lg-3 col-xl-2">
                    <a href="index.html">
                        <img src="../img/Logo Proyecto.jpg" class="img-fluid" alt="Sample image">
                    </a>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="../php/procesar_login.php" method="POST">
                        <h2>Inicio Sesion</h2>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="correo" class="form-control form-control-lg"
                                placeholder="Correo Electronico" />
                            <label class="form-label" for="correo"></label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" class="form-control form-control-lg"
                                placeholder="Contraseña" />
                            <label class="form-label" for="contrasena"></label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">Recordarme</label>
                            </div>
                            <a href="#!" class="text-body">Olvido su contraseña?</a>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-success btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Continuar</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">No tienes una cuenta? <a href="../html/registroDB.php"
                                    class="link-danger">Registrarse</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
       
    </section>
    <!-- Agrega el enlace al JS de Bootstrap (opcional, para funcionalidades interactivas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer class="footer">Proyecto Desarrollo Web</footer>

</html>