<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin.css');?>">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form">
                    <h2 class="title">Iniciar Sesión</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre Usuario">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña">
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
                </form>


                <form action="" class="sign-up-form">
                    <h2 class="title">Registrarse</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre Usuario">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="password" placeholder="Email">
                    </div>
                    <input type="submit" value="registrarme" class="btn solid">
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
                </form>
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
    <script src="<?php echo base_url('assets/js/app.js');?>"></script>
</body>
</html>