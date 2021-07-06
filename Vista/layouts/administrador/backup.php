<!DOCTYPE html>
<html lang="en">
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- PWA desde aqui segun el video-->
        <!-- Para pintar de color la barra de navegador de un navegador-->
        <meta name="theme-color" content="#222">
        <!-- Para decirle a los navegadores que tu sitio esta optimizado para moviles y que el sitio es amigable -->
        <meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
        <!-- PWA para apple-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- icono-->
        <link rel="shortcut icon" type="image/png" href="../../assets/img/icons/favicon/ico.png">
        <!-- Pantalla de inicio-->
        <link rel="apple-touch-icon" href="../../assets/img/icons/favicon/ico.png">
        <link rel="apple-touch-startup-image" href="../../assets/img/icons/favicon/ico.png">
        
        <!-- importante -->
        <link rel="manifest" href="manifest.json">
        <title>Gustov</title>

        <!-- Vendors -->

        <!-- Animate CSS -->
        <link href="../../vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link href="../../vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- Site CSS -->
        <link href="../../assets/css/app-1.min.css" rel="stylesheet">
        
        <!-- LordIcon  -->
        <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    </head>
    
    <body>
        <br><br>
        <div class="login">

            <!-- Backup -->
            
            <div class="login__block toggled" id="l-login">
                <div class="login__block__header">
                    <i class="zmdi zmdi-acscount-circle">
                        <lord-icon
                            src="https://cdn.lordicon.com/igrslveu.json"
                            trigger="loop"
                            colors="primary:#e4e4e4,secondary:#86c716"
                            style="width:57px;height:57px">
                        </lord-icon>
                    </i>
                    Ingrese su codigo PIN
                </div>
                <div class="login__block__body">
                    <p class="m-t-30">Usted esta intentanto realizar una copia de seguridad de la base de datos, porfavor ingrese su PIN para verificar.</p>
                    <form method="POST">
                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control" name="pin" id="pin">
                        <label>Escriba su PIN</label>
                        <i class="form-group__bar"></i>
                    </div>
                    <button class="btn btn--light btn--icon m-t-15" type="submit" value="Enviar"><i class="zmdi zmdi-check"></i></button>
                    </form>
                </div>
            </div>

            <div class="pin" style="opacity:0;">
            <?php
                $codigo="Gustov";
                $pin = trim($_POST['pin']);
                    if($pin == $codigo) {
                            $db_host = 'localhost'; //Host del Servidor MySQL
                            $db_name = 'gustov'; //Nombre de la Base de datos
                            $db_user = 'root'; //Usuario de MySQL
                            $db_pass = ''; //Password de Usuario MySQL
                            
                            $fecha = date("Ymd-His"); //Obtenemos la fecha y hora para identificar el respaldo
                         
                            // Construimos el nombre de archivo SQL Ejemplo: mibase_20170101-081120.sql
                            $salida_sql = $db_name.'_'.$fecha.'.sql'; 
                            
                            //Comando para genera respaldo de MySQL, enviamos las variales de conexion y el destino
                            $dump = "mysqldump --h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";
                            system($dump, $output); //Ejecutamos el comando para respaldo
                            
                            $zip = new ZipArchive(); //Objeto de Libreria ZipArchive
                            
                            //Construimos el nombre del archivo ZIP Ejemplo: mibase_20160101-081120.zip
                            $salida_zip = $db_name.'_'.$fecha.'.zip';
                            
                            if($zip->open($salida_zip,ZIPARCHIVE::CREATE)===true) { //Creamos y abrimos el archivo ZIP
                                $zip->addFile($salida_sql); //Agregamos el archivo SQL a ZIP
                                $zip->close(); //Cerramos el ZIP
                                unlink($salida_sql); //Eliminamos el archivo temporal SQL
                                header ("Location: $salida_zip"); // Redireccionamos para descargar el Arcivo ZIP
                                } else {
                                echo 'Error'; //Enviamos el mensaje de error
                            }
                    }
                    else {
                    echo "Authorization Rejected!";
                    }
            ?>
            </div>
        </div>


        <!-- Javascript Libraries -->

        <!-- jQuery -->
        <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    
        <!-- Bootstrap -->
        <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Site Functions & Actions -->
        <script src="../../assets/js/app.min.js"></script>
    </body>
</html>