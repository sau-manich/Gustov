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
        <title>CAP-21 PWA</title>

        <!-- Vendors -->

        <!-- Animate CSS -->
        <link href="../../vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link href="../../vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- Malihu Scrollbar -->
        <link href="../../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">

        <!-- Full Calendar -->
        <link href="../../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">


         <!-- Site CSS -->
         <link href="../../assets/css/app-1.min.css" rel="stylesheet">

        <!-- Page loader -->
        <script src="../../assets/js/page-loader.min.js"></script>
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
                <a href="index.php"  class="hidden-xs" align="center">
                    CAP-21
                    <small>Sistema de Cobro</small>
                </a>
                <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
            </div>

            <ul class="top-menu">

                <li class="top-menu__trigger hidden-lg hidden-md">
                    <h4 style="margin-left: -30%;">CAP-21</h4>
                    <h6 style="margin-left: -55%;">Sistema Cobro OTB</h6>
                </li>
                
                <li class="top-menu__apps dropdown hidden-xs hidden-sm">
                    <a data-toggle="dropdown" href="index.php">
                        <i class="zmdi zmdi-globe"></i>
                    </a>
                    <!-- <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-cloud-off"></i>
                                    <small>Problemas</small>
                                </a>
                            </li>
                              <li>
                                  <a href="">
                                      <i class="zmdi zmdi-calendar"></i>
                                      <small>Calendario</small>
                                  </a>
                              </li>
                              <li>
                                  <a href="">
                                      <i class="zmdi zmdi-trending-up"></i>
                                      <small>Reportes</small>
                                  </a>
                              </li>
                          </ul> -->
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
                <!-- <li class="top-menu__profile dropdown">
                    <a data-toggle="dropdown" href="">
                        <img src="../../assets/img/usuarios/images.png" alt="">
                    </a>

                    <ul class="dropdown-menu pull-right dropdown-menu--icon">
                        <li>
                            <a href="perfil.html"><i class="zmdi zmdi-account"></i> Ver Perfil</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-input-antenna"></i> Comprobar Red</a>
                        </li>
                        <li>
                            <a data-mae-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Pantalla Completa</a>
                        </li>
                        <li>
                            <a href="../../index.html"><i class="zmdi zmdi-time-restore"></i> Salir</a>
                        </li>
                    </ul>
                </li> -->
            </ul>

             

            <form class="top-search">
                <input type="text" class="top-search__input" placeholder="Busquemos por n??mero de recibo.." disabled>
                <i class="zmdi zmdi-search top-search__reset"></i>
            </form>
        </header>

        <section id="main">
            <aside id="notifications">
                <ul class="tab-nav tab-nav--justified tab-nav--icon">
                    <li><a class="user-alert__messages" href="#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="user-alert__notifications" href="#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="user-alert__tasks" href="#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-playlist-plus"></i></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane" id="notifications__messages">
                        <div class="list-group">
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulana de Barnes</div>
                                    <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulanito de Lawson</div>
                                    <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulanita de Mckinney</div>
                                    <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Fulanisos Rudolph Perez</div>
                                    <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                                </div>
                            </a>
                        </div>

                        <a href="" class="btn btn--float">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>

                    <div class="tab-pane" id="notifications__updates">
                        <div class="list-group">
                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="list-group__heading">Fulano Villa Jacobs</div>
                                    <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item">
                                <div class="list-group__heading">Fulana Candice Barnes</div>
                                <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                            </a>

                            <a href="" class="list-group-item">
                                <div class="list-group__heading"> Fulanillo Jeannette Lawson</div>
                                <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Filancirigillo </div>
                                    <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Rudolph Perez</div>
                                    <small class="list-group__text">Poner alguna descripci??n en la lista</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="tab-pane" id="notifications__tasks">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Almacenamiento Socios</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Extenci??n de Google Chrome </div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Socios activos</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
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
                                </div>
                            </div>
                        </div>

                        <a href="" class="btn btn--float">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>
                </div>
            </aside>

            <aside id="navigation">
                <div class="navigation__header">
                    <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i> <h4 align="center" style="margin-top: -30px;">CAP-21</h4>
                </div>

                <div class="navigation__toggles">
                    <a href="" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
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
                            <a href="index.php"><i class="zmdi zmdi-home"></i> Tablero</a>
                        </li>
                        <li class="navigation__active"><a href="cobroFacturacion.php"><i class="zmdi zmdi-layers"></i> Cobro y facturaci??n</a></li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Lecturas</a>
                            <ul>
                                <li><a href="lecturaMedidor.php">Medidor</a></li>
                                <li><a href="lecturaReunion.php">Reuniones</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-widgets"></i> Acciones</a>

                            <ul>
                                <li><a href="registroAccion.php">Registro de aciones</a></li>
                                <li><a href="registroMedidor.php">Registro de medidores</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-trending-up"></i>Reportes</a>
                            <ul>
                                <li><a href="reporteConsumoAgua.php">Consumo de Agua</a></li>
                                <li><a href="reporteAsamblea.php">Asambleas</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Configuraci??n</a>
                            <ul>
                                <li><a href="aviso.php">Avisos</a></li>
                                <li><a href="cuenta.php">Cuentas</a></li>
                                <li><a href="backup.php">Backup (BD)</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>
            
            <section id="content">
                <div class="container">
                    
                    <div class="invoice">
                        
                        
                        <div class="row invoice__address">
                            <div class="col-xs-3">
                                <div class="invoice__header">
                                    <h2 align="center"><img src="../../assets/img/logo.png" width="100%" alt=""></h2>
                                    <br>
                                    COMITE DE AGUA POTABLE <br/>
                                    Villa 21 de Septiembre
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="text-right"><br><br>
                                    <h4>Comite Agua Potable</h4>

                                    <address>
                                        OTB Villa 21 de Septiembre "SUR"
                                    </address>

                                    N?? Recibo 456213<br/>
                                    Recivo emitido por el sistema CAP-21
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-left"><br><br>
                                    <h4> Sistema CAP 21</h4>

                                    <address>
                                        Recivo emitido en fecha 02/02/2020 09:56:34
                                    </address>
                                    En caso de perder la aplicaci??n en tu telefono, puedes descargarlo escaneando aqui.
                                </div>
                            </div>

                            <div class="col-xs-2">
                                <h2 align="center"><img src="../../assets/img/qr3.png" width="70%" alt=""></h2>
                                <address>
                                    QR para la Aplicacion??n
                                </address>
                            </div>
                        </div>
                        
                            

                        <table class="table table-bordered invoice__table">
                            <thead>
                                <tr class="text-uppercase">
                                    <th>CONCEPTO</th>
                                    <th>MES</th>
                                    <th>MONTO</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 50%">
                                        <h5>Consumo de agua (13) </h5>
                                    </td>

                                    <td>Diciembre</td>
                                    <td>Bs.- 13.00</td>
                                    <td>Bs.- 13.00</td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5>Multa</h5>
                                    </td>
                                    <td>Diciembre</td>
                                    <td>Bs.- 30.00</td>
                                    <td>Bs.- 30.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td>Bs.- 43.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row invoice__address">
                            <div class="col-xs-3">
                                <div class="invoice__header">
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="text-center"><br><br>
                                __________________________________
                                    <h4>Entregue conforme</h4>
                                </div>
                            </div>
    
                            <div class="col-xs-4">
                                <div class="text-center"><br><br>
                                ___________________________________
                                    <h4>Recibi conforme</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    
                    <div class="invoice">
                        
                        
                        <div class="row invoice__address">
                            <div class="col-xs-3">
                                <div class="invoice__header">
                                    <h2 align="center"><img src="../../assets/img/logo.png" width="100%" alt=""></h2>
                                    <br>
                                    COMITE DE AGUA POTABLE <br/>
                                    Villa 21 de Septiembre
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="text-right"><br><br>
                                    <h4>Comite Agua Potable</h4>

                                    <address>
                                        OTB Villa 21 de Septiembre "SUR"
                                    </address>

                                    N?? Recibo 456213<br/>
                                    Recivo emitido por el sistema CAP-21
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-left"><br><br>
                                    <h4> Sistema CAP 21</h4>

                                    <address>
                                        Recivo emitido en fecha 02/02/2020 09:56:34
                                    </address>
                                    En caso de perder la aplicaci??n en tu telefono, puedes descargarlo escaneando aqui.
                                </div>
                            </div>

                            <div class="col-xs-2">
                                <h2 align="center"><img src="../../assets/img/qr3.png" width="70%" alt=""></h2>
                                <address>
                                    QR para la Aplicacion??n
                                </address>
                            </div>
                        </div>
                        
                            

                        <table class="table table-bordered invoice__table">
                            <thead>
                                <tr class="text-uppercase">
                                    <th>CONCEPTO</th>
                                    <th>MES</th>
                                    <th>MONTO</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 50%">
                                        <h5>Consumo de agua (13) </h5>
                                    </td>

                                    <td>Diciembre</td>
                                    <td>Bs.- 13.00</td>
                                    <td>Bs.- 13.00</td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5>Multa</h5>
                                    </td>
                                    <td>Diciembre</td>
                                    <td>Bs.- 30.00</td>
                                    <td>Bs.- 30.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td>Bs.- 43.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row invoice__address">
                            <div class="col-xs-3">
                                <div class="invoice__header">
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="text-center"><br><br>
                                __________________________________
                                    <h4>Entregue conforme</h4>
                                </div>
                            </div>
    
                            <div class="col-xs-4">
                                <div class="text-center"><br><br>
                                ___________________________________
                                    <h4>Recibi conforme</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn--float btn--fixed" data-mae-action="print"><i class="zmdi zmdi-print"></i></button>
            </section>

            <footer id="footer">
                Copyright &copy; s@u-Crgt 2020

                <ul class="footer__menu">
                    <li><a href="#">??Problemas?</a></li>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">??Soporte!</a></li>
                </ul>
            </footer>
    
            </section>
    
            <!-- Older IE Warning -->
            <!--[if lt IE 9]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                    <div class="ie-warning__container">
                        <ul class="ie-warning__download">
                            <li>
                                <a href="http://www.google.com/chrome/">
                                    <img src="img/browsers/chrome.png" alt="">
                                    <div>Chrome</div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.mozilla.org/en-US/firefox/new/">
                                    <img src="img/browsers/firefox.png" alt="">
                                    <div>Firefox</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.opera.com">
                                    <img src="img/browsers/opera.png" alt="">
                                    <div>Opera</div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.apple.com/safari/">
                                    <img src="img/browsers/safari.png" alt="">
                                    <div>Safari</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                    <img src="img/browsers/ie.png" alt="">
                                    <div>IE (New)</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->
    
    
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
    
             <!-- Simple Weather -->
             <script src="../../vendors/simpleWeather/jquery.simpleWeather.min.js"></script>
    
             <!-- Salvattore -->
             <script src="../../vendors/salvattore/dist/salvattore.min.js"></script>
    
            <!-- Flot Charts -->
            <script src="../../vendors/flot/jquery.flot.js"></script>
            <script src="../../vendors/flot/jquery.flot.resize.js"></script>
            <script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
    
            <!-- Sparkline Charts -->
            <script src="../../vendors/jquery.sparkline/jquery.sparkline.min.js"></script>
    
            <!-- EasyPie Charts -->
            <script src="../../vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

            <!-- Placeholder for IE9 -->
            <!--[if IE 9 ]>
                <script src="vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
            <![endif]-->
    
             <!-- Demo Only -->
             <script src="../../demo/js/flot-charts/curved-line.js"></script>
            <script src="../../demo/js/flot-charts/line.js"></script>
            <script src="../../demo/js/easy-pie-charts.js"></script>
            <script src="../../demo/js/sparkline-charts.js"></script>
            <script src="../../demo/js/calendar.js"></script>
    
            <!-- Site Functions & Actions -->
            <script src="../../assets/js/app.min.js"></script>
    
            <!-- PWA script -->
            <script src="script.js"></script>
    </body>
</html>