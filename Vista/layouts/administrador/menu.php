<?php
session_start();
if ($_SESSION["usuario"]!=null) {
  ?>

<!DOCTYPE html>
<html lang="es">
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- icono-->
        <link rel="shortcut icon" type="image/png" href="../../assets/img/icons/favicon/ico.png">
        <title>Gustov</title>

        <!-- Vendors -->

        <!-- calendario CSS -->
        <link href="../../assets/css/calendario.css" rel="stylesheet">

        <!-- Animate CSS -->
        <link href="../../vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link href="../../vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- Malihu Scrollbar -->
        <link href="../../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">

        <!-- Full Calendar -->
        <link href="../../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">

        <!-- Bootstrap Date/Time picker -->
        <link href="../../vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

        <!-- Select 2 -->
        <link href="../../vendors/select2/dist/css/select2.min.css" rel="stylesheet">

        <!-- Site CSS -->
        <link href="../../assets/css/app-1.min.css" rel="stylesheet">

        <!-- Page loader -->
        <script src="../../assets/js/page-loader.min.js"></script>

        <script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    </head>
    
    <body>
        
        <!-- Page Loader -->
        <div id="page-loader">
            <div class="preloader preloader--xl preloader--light">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" />
                </svg>
            </div>
        </div>

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <a href="#"  class="hidden-xs" align="center">
                    GUSTOV
                    <small>Sistema de ventas</small>
                </a>
                <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
            </div>
            <ul class="top-menu">
                <li class="top-menu__trigger hidden-lg hidden-md">
                    <h4 style="margin-left: -30%;">GUSTOV</h4>
                    <h6 style="margin-left: -55%;">Sistema de ventas</h6>
                </li>
                <li class="top-menu__apps dropdown hidden-xs hidden-sm">
                    <a data-toggle="dropdown" href="index.php">
                        <i class="zmdi zmdi-globe"></i>
                    </a>
                </li>
                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" href=""><i class="zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dropdown-menu--icon pull-right">
                        <li class="hidden-xs">
                            <a data-mae-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Pantalla Completa</a>
                        </li>
                        <li>
                            <a data-mae-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Eliminar Caches</a>
                        </li>
                    </ul>
                </li>
                <li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                    <a href=""><i class="zmdi zmdi-widgets"></i></a>
                </li>
            </ul>
            <form class="top-search">
                <input type="text" class="top-search__input" placeholder="Bienvenido al panel administrador de Gustov.." disabled>
                <i class="zmdi zmdi-thumb-up top-search__reset"></i>
            </form>
        </header>

        <section id="main">
            <aside id="notifications">
                <ul class="tab-nav tab-nav--justified tab-nav--icon">
                    <li><a class="user-alert__messages" href="#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-balance"></i></a></li>
                    <li><a class="user-alert__notifications" href="#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="user-alert__tasks" href="#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-cloud-done"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="notifications__messages">
                        <div class="list-group">
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="../../assets/img/usuarios/man.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="../../assets/img/usuarios/boy-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="../../assets/img/usuarios/girl-7.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="../../assets/img/usuarios/girl-5.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="../../assets/img/usuarios/boy-4.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="notifications__updates">
                        <div class="list-group">
                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="../../assets/img/usuarios/boy-3.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                            <a href="" class="list-group-item">
                                <div class="pull-right">
                                    <img class="avatar-img" src="../../assets/img/usuarios/girl.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                            <a href="" class="list-group-item">
                                <div class="pull-right">
                                    <img class="avatar-img" src="../../assets/img/usuarios/girl.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="../../assets/img/usuarios/boy-4.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="../../assets/img/usuarios/girl.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">+591 65448894 </small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="notifications__tasks">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Rendimiento GUSTOV onLine</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Rendimiento GUSTOV offLine</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Caches del navegador </div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Rendimiento del Sistema</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Tiempo de Actualizacion</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div><br>
                            </div>
                            <a href="../../../Controlador/autentificacionControlador.php?opc=salir" class="btn btn--float">
                                <i class="zmdi zmdi-power"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>

            <aside id="navigation">
                <div class="navigation__header">
                    <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i> <h4 align="center" style="margin-top: -30px;">GUSTOV</h4>
                </div>
                <div class="navigation__toggles">
                    <a href="" class="active" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                        <i class="zmdi zmdi-balance"></i>
                    </a>
                    <a href="" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__updates">
                        <i class="zmdi zmdi-email"></i>
                    </a>
                    <a href=""  data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__tasks">
                        <i class="zmdi zmdi-assignment-account"></i>
                    </a>
                </div>
                <div class="navigation__menu c-overflow">
                    <ul>
                        <li>
                            <a href="venta.php"><i class="zmdi">
                                <lord-icon
                                    src="https://cdn.lordicon.com//slkvcfos.json"
                                    colors="primary:#e4e4e4,secondary:#86c716"
                                    style="width:30px;height:30px">
                                </lord-icon></i> Venta
                            </a>
                        </li>
                        <li>
                            <a href="cliente.php"><i class="zmdi">
                                <lord-icon
                                    src="https://cdn.lordicon.com//dxjqoygy.json"
                                    colors="primary:#e4e4e4,secondary:#86c716"
                                    style="width:28px;height:28px">
                                </lord-icon></i> Cliente
                            </a>
                        </li>
                        <li class="navigation__active">
                            <a href="menu.php"><i class="zmdi">
                                <lord-icon
                                    src="https://cdn.lordicon.com//jvucoldz.json"
                                    trigger="loop"
                                    colors="primary:#e4e4e4,secondary:#86c716"
                                    style="width:30px;height:30px">
                                </lord-icon></i> Menu
                            </a>
                        </li>
                        <li>
                            <a href="reporte.php"><i class="zmdi">
                                <lord-icon
                                    src="https://cdn.lordicon.com//gqdnbnwt.json"
                                    colors="primary:#e4e4e4,secondary:#86c716"
                                    style="width:28px;height:28px">
                                </lord-icon></i> Reporte
                            </a>
                        </li>
                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi">
                                <lord-icon
                                    src="https://cdn.lordicon.com//dtgezzsi.json"
                                    colors="primary:#e4e4e4,secondary:#86c716"
                                    style="width:30px;height:30px">
                                </lord-icon></i> Configuracion
                            </a>
                            <ul>
                                <li><a href="cuenta.php">Cuentas</a></li>
                                <li><a href="backup.php">Backup (BD)</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <section id="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content__header">
                            <h2>Platos</h2>
                            <div class="actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Refrescar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__header">
                                <h2 align="center">
                                    <lord-icon
                                        src="https://cdn.lordicon.com//fyhanzjw.json"
                                        trigger="loop"
                                        colors="primary:#e4e4e4,secondary:#86c716"
                                        style="width:150px;height:150px">
                                    </lord-icon> <br><br> Registro de platillos para menu
                                    <small>Los datos registrados seran usados para relacionarlos con el menu.</small></h2><br>
                                <br>
                            </div>
                            
                            <form action="../../../Controlador/menuControlador.php?opc=guardar" method="post">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="zmdi zmdi-album"></i></span>
                                                    <div class="form-group">
                                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del plato" required autocomplete="off">
                                                        <i class="form-group__bar"></i>
                                                    </div>
                                                </div><br>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
                                                    <div class="form-group">
                                                        <input type="number" name="precio" class="form-control" placeholder="Precio" required autocomplete="off">
                                                        <i class="form-group__bar"></i>
                                                    </div>
                                                </div><br>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-centered">
                                                    <label class="radio-inline">
                                                    <input type="radio" name="estado" value=true required>
                                                    <i class="input-helper"></i>
                                                    Activo
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="estado" value=false required>
                                                    <i class="input-helper"></i>
                                                    Inactivo
                                                    </label>
                                                </div><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="zmdi zmdi-assignment"></i></span>
                                                    <div class="form-group">
                                                        <input type="text" name="ingredientePrincipal" class="form-control" placeholder="Ingrediente Principal" required autocomplete="off">
                                                        <i class="form-group__bar"></i>
                                                    </div>
                                                </div><br>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="zmdi zmdi-assignment"></i></span>
                                                    <div class="form-group">
                                                        <input type="text" name="ingredienteSecundario" class="form-control" placeholder="Ingrediente Secundario" required autocomplete="off">
                                                        <i class="form-group__bar"></i>
                                                    </div>
                                                </div><br>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="zmdi zmdi-assignment"></i></span>
                                                    <div class="form-group">
                                                        <input type="text" name="ingredienteComplemento" class="form-control" placeholder="Ingrediente Complemento" required autocomplete="off">
                                                        <i class="form-group__bar"></i>
                                                    </div>
                                                </div><br>
                                            </div>
                                            <div class="col-sm-3">
                                                <p align="center">
                                                    <button type="submit" class="btn btn-success btn--icon" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Se almacenara en nuestra base de datos" title="" data-original-title="Guardar"><i class="zmdi zmdi-cloud-outline"></i></button>
                                                    <button type="button" class="btn btn--light btn--icon"
                                                        data-trigger="hover" 
                                                        data-toggle="popover"
                                                        data-placement="top"
                                                        data-content="Se eliminara el formulario registrado del menu"
                                                        data-original-title="Eliminar">
                                                        <i class="zmdi zmdi-close"></i>
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="action-header">
                                <div class="action-header__label" align="left"><span class="hidden-xs">Lista de Platos en el menu</span></div>
                                <div class="action-header__search">
                                    <input type="text" placeholder="Busquemos un plato.." class="action-header__input">
                                    <i class="action-header__close zmdi zmdi-long-arrow-left"></i>
                                </div>
                                <div class="actions action-header__actions">
                                    <a href="" class="action-header__toggle"><i class="zmdi zmdi-search"></i></a>
                                    <div class="dropdown ">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="">Refrescar</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card__header">
                                <h2 align="center">Menu de GUSTOV <small>Si realiza algun cambio, recuerda actualizar el estado.</small></h2>
                            </div>
                            <div class="card__body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Nombre del plato</th>
                                            <th>Precio</th>
                                            <th>Estado</th>
                                            <th>Acción</th>
                                        </tr>
                                        </thead>
                                        <tbody id="menuTabla">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer id="footer">Copyright 2021 &copy; s@u!_m@n!ch
                <ul class="footer__menu">
                    <li><a href="#">¿Problema?</a></li>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">¡Soporte!</a></li>
                </ul>
            </footer>
        </section>

       <!-- Javascript Libraries -->
    
           <!-- jQuery -->
           <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    
           <!-- Bootstrap -->
           <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   
           <!-- Malihu ScrollBar -->
           <script src="../../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
   
           <!-- Bootstrap Notify -->
           <script src="../../vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
   
           <!-- Moment -->
           <script src="../../vendors/moment/min/moment.min.js"></script>
   
           <!-- FullCalendar -->
           <script src="../../vendors/fullcalendar/dist/fullcalendar.min.js"></script>
   
           <!-- Salvattore -->
           <script src="../../vendors/salvattore/dist/salvattore.min.js"></script>
   
           <!-- Bootstrap Date/Time Picker -->
           <script src="../../vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
           
           <!-- Select 2 -->
           <script src="../../vendors/select2/dist/js/select2.full.min.js"></script>
          
           <!-- Demo Only -->
           <script src="../../assets/demo/js/calendar.js"></script>

            <!-- Site Functions & Actions -->
            <script src="../../assets/js/app.min.js"></script>

            <!-- calendario -->
            <script src="../../assets/js/calendario.js"></script>



        





        <!-- ============================= Listamos en la tabla ID="menuTabla" ============================= -->

        <script type="text/javascript">
        $(document).ready(function(){
            listarMenu();
          });

          function listarMenu()
          {
            $.ajax({
              method:'POST',
              url:'../../../Controlador/menuControlador.php?opc=listar',
              data: ''
            }).done(function(info){
              var data = JSON.parse(info);
              console.log(data);
              for (var i = 0; i < data.length; i++)
              {
                $('#menuTabla').append('<tr>');
                $('#menuTabla').append('<td> '+data[i]['nombre']+'</td>');
                $('#menuTabla').append('<td> '+data[i]['precio']+'</td>');
                $('#menuTabla').append('<td> '+data[i]['ci']+'</td>');
                $('#menuTabla').append('<td><button class="btn btn-success btn--icon"><i class="zmdi zmdi-edit" style="color:white;"></i></button> <button class="btn btn--light btn--icon"><a href="../../../Controlador/menuControlador.php?opc=eliminarMenu&key='+data[i]['id_menu']+'"><i class="zmdi zmdi-close" style="color:white;"></i></button></td>');
                $('#menuTabla').append('</tr><br><hr>');
              }
            });
          }
          </script>


    </body>
</html>
<?php
}
else
{
header('location: ../../');
//
}
?>
