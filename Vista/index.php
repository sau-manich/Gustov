<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- PWA desde aqui-->
        <!-- Para pintar de color la barra de navegador de un navegador-->
        <meta name="theme-color" content="#222">
        <!-- Para decirle a los navegadores que tu sitio esta optimizado para moviles y que el sitio es amigable -->
        <meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
        <!-- PWA para apple-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- icono-->
        <link rel="shortcut icon" type="image/png" href="assets/img/icons/favicon/ico.png">
        <!-- Pantalla de inicio-->
        <link rel="apple-touch-icon" href="assets/img/icons/favicon/ico.png">
        <link rel="apple-touch-startup-image" href="assets/img/icons/favicon/ico.png">
        <!-- importante -->
        <link rel="manifest" href="manifest.json">
        <title>Gustov</title>

        <!-- Vendors -->

        <!-- Animate CSS -->
        <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link href="vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- Site CSS -->
        <link href="assets/css/app.css" rel="stylesheet">
        
        <!-- LordIcon  -->
        <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    </head>
    
    <body>
        
        <br><br>
        <div class="login">

            <!-- Login -->
            
            <div class="login__block toggled" id="l-login">
                <div class="login__block__header">
                    <i class="zmdi zmdi-acscount-circle">
                        <lord-icon
                            src="https://cdn.lordicon.com/coqbeapw.json"
                            trigger="loop"
                            colors="primary:#e4e4e4,secondary:#86c716"
                            style="width:57px;height:57px">
                        </lord-icon>
                    </i>
                    Bienvenido a GUSTOV
                    <div class="actions login__block__actions">
                        <div class="dropdown">
                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a data-block="#l-register" href="">Crear una cuenta</a></li>
                                <li><a data-block="#l-forget-password" href="">¿Olvidaste tu cuenta y contraseña?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <form id="autentificacionLogin">
                    <div class="login__block__body">
                        <div class="form-group form-group--float form-group--centered form-group--centered">
                            <input id="email" type="text" name="usuario" class="form-control" required autocomplete="off"/>
                            <label>Email</label>
                            <i class="form-group__bar"></i>
                        </div>

                        <div class="form-group form-group--float form-group--centered form-group--centered">
                            <input id="contrasena" type="password" name="contrasena" class="form-control" required autocomplete="off" password-reveal/>
                            <label>Contraseña</label>
                            <i class="form-group__bar"></i>
                        </div>

                        <button type="submit" class="btn btn--light btn--icon m-t-15"><i class="zmdi zmdi-long-arrow-right"></i></button>
                    </div>
                    <div id="info"></div>
              </form>
            </div>

            <!-- Register -->

            <div class="login__block" id="l-register">
                <div class="login__block__header palette-Blue bg">
                    <i class="zmdi zmdi-acscount-circle">
                    <lord-icon
                        src="https://cdn.lordicon.com//dxjqoygy.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#86c716"
                        style="width:57px;height:57px">
                    </lord-icon>
                    </i>
                    Creemos una cuenta

                    <div class="actions login__block__actions">
                        <div class="dropdown">
                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                            <ul class="dropdown-menu pull-right">
                                <li><a data-block="#l-login" href="">Ya tengo una cuenta</a></li>
                                <!-- <li><a data-block="#l-forget-password" href="">Terminos y condiciones</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                <form>
                <div class="login__block__body">

                    <div class="input-centered"><br>
                        <label>
                            Actualmente esta opcion no esta disponible, consulta con el administrador para poder tener una cuenta
                        </label>
                    </div>
                </div>
                </form>
            </div>

            <!-- Forgot Password -->
            <div class="login__block" id="l-forget-password">
                <div class="login__block__header palette-Purple bg">
                    <i class="zmdi zmdi-acscount-circle">
                    <lord-icon
                        src="https://cdn.lordicon.com//ochimkct.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#86c716"
                        style="width:57px;height:57px">
                    </lord-icon>
                    </i>
                    ¿Olvidaste tu cuenta y contraseña?

                    <div class="actions login__block__actions">
                        <div class="dropdown">
                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                            <ul class="dropdown-menu pull-right">
                                <li><a data-block="#l-login" href="">Ya la recorde!</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <p class="m-t-30">Descuida, enviaremos un mensaje de ayuda al desarrollador para poder brindarle lo más antes posible los datos necesarios.</p>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control">
                        <label>Escriba su nombre y su CI</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <button class="btn btn--light btn--icon m-t-15"><i class="zmdi zmdi-email"></i></button>
                </div>
            </div>
        </div>


        <!-- Javascript Libraries -->

        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Site Functions & Actions -->
        <script src="assets/js/app.min.js"></script>

        <!-- <script src="src/app.js"></script> -->
        <script src="src/autentificacion.js"></script>

        <!-- PWA script -->
        <script src="script.js"></script>
    </body>
</html>