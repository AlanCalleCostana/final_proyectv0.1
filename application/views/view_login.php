<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet" />
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css'); ?>">
</head>

<body>
    <div class="containerlogin">
        <div class="forms-container">
            <div class="signin-signup">
                <?php
                $attributes = array('class' => 'sign-in-form');
                echo form_open_multipart("login/validarusuario", $attributes);
                ?>
                <h2 class="title">Iniciar Sesión</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Contraseña">
                        </div>
                    </div>
                </div>

                <input type="submit" value="Iniciar Sesion" class="btn solid">
                <p class="social-text">Redes Sociales</p>
                <div class="social-media">
                    <a href="" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
                <?php
                echo form_close();
                ?>

                <?php
                $attributes = array('class' => 'sign-up-form');
                echo form_open_multipart("login/agregaruserbd", $attributes);
                ?>
                <h2 class="title">Registrarse</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nombre" placeholder="Nombre(s)" minlength="3" maxlength="20" required>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="apellido1" placeholder="Primer Apellido" minlength="3"
                                maxlength="20" required>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="apellido2" placeholder="Segundo Apellido" minlength="3"
                                maxlength="20">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 input-field">
                            <i class="fas fa-mobile"></i>
                            <input type="number" name="telefono" placeholder="Telefono" required>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="user" placeholder="Nombre Usuario" minlength="4" maxlength="8"
                                required>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Contraseña" minlength="4" maxlength="8"
                                equired>
                        </div>
                    </div>
                </div>
                <input type="submit" value="registrar" class="btn solid">
                <p class="social-text">Visita nuestras redes sociales</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
                <?php
                echo form_close();
                ?>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>¿Eres nuevo aqui?</h3>
                    <p>Crea una cuenta</p>
                    <button class="btn transparent" id="sign-up-btn">Registrarme</button>
                </div>
                <img src="#" class="img" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>¿Ya tienes una cuenta? </h3>
                    <p>Inicia sesion con nosotros</p>
                    <button class="btn transparent" id="sign-in-btn">Iniciar Sesion</button>
                </div>
                <img src="#" class="img" alt="">
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
</body>

</html>