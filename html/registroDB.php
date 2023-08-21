<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
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
                    <form action="../php/procesar-pedidos.php" method="POST">
                        <h2>Registrarse</h2>
                        <div class="form-outline mb-4">
                            <input type="text" id="nombre" class="form-control form-control-lg"
                                placeholder="Nombre" />
                            <label class="form-label" for="nombre"></label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="apellido" class="form-control form-control-lg"
                                placeholder="Apellido" />
                            <label class="form-label" for="apellido"></label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="correo" class="form-control form-control-lg"
                                placeholder="Correo" />
                            <label class="form-label" for="correo"></label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="contrasena" class="form-control form-control-lg"
                                placeholder="Contraseña" />
                            <label class="form-label" for="contrasena"></label>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-success btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrarse</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Ya tienes una cuenta? <a href="../html/inicioSesion.php"
                                    class="link-danger">Iniciar Sesión</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer class="footer">Proyecto Desarrollo Web</footer>
</html>