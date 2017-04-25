<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>El Colectivo SJ</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--side menu plugin-->
        <link href="<?php echo base_url();?>assets/plugins/hoe-nav/hoe.css" rel="stylesheet">
        <!-- icons-->
        <link href="<?php echo base_url();?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
        <!--template custom css file-->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

        <script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body hoe-navigation-type="vertical" hoe-nav-placement="left" theme-layout="wide-layout">

        <!--side navigation start-->
        <div id="hoeapp-wrapper" class="hoe-hide-lpanel" hoe-device-type="desktop">
            <header id="hoe-header" hoe-lpanel-effect="shrink">
                <div class="hoe-left-header">
                    <a href="#"> El Colectivo SJ</a>
                    <span class="hoe-sidebar-toggle"><a href="#"></a></span>
                </div>

                <div class="hoe-right-header" hoe-position-type="relative">
                    <span class="hoe-sidebar-toggle"><a href="#"></a></span>
                    <ul class="left-navbar">
                        <li>
                            <div class="top-search hidden-xs">
                                <form>
                                    <input type="text" class="form-control" placeholder="Search here">
                                    <i class="ion-search"></i>
                                </form>
                            </div>
                        </li>

                    </ul>
                    <ul class="right-navbar navbar-right ">
                        <li class="dropdown hidden">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="ion-ios-bell-outline"></i> <span class="label label-danger">4</span></a>
                            <ul class="dropdown-menu dropdown-menu-scale lg-dropdown notifications">
                                <li> <p>You have 3 new notifications <a href="#"> Mark all Read</a></p></li>
                                <li class="unread-notifications">
                                    <a href="#">
                                        <i class="ion-ios-email-outline pull-right"></i>
                                        <span class="line">You have 8 Messages</span>
                                        <span class="small-line">3 Minutes ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-social-twitter-outline pull-right"></i>
                                        <span class="line">You have 3 new followers</span>
                                        <span class="small-line">8 Minutes ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-ios-download-outline pull-right"></i>
                                        <span class="line">Download Complete</span>
                                        <span class="small-line">6 Minutes ago</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown hidden">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="assets/images/us.png" alt=""> English</a>
                            <ul class="dropdown-menu dropdown-menu-scale lang-dropdown">
                                <li><a href="#"><img src="assets/images/us.png" alt=""> English </a></li>
                                <li><a href="#"><img src="assets/images/es.png" alt=""> Spanish </a></li>
                                <li><a href="#"><img src="assets/images/tr.png" alt=""> Turkish </a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="assets/images/avtar.png" alt="" width="30" class="img-circle"> Administrador</a>
                            <ul class="dropdown-menu dropdown-menu-scale user-dropdown">
                                <li><a href="#"><i class="ion-email-unread"></i> Inbox <span class="label label-warning">3</span></a></li>
                                <li><a href="#"><i class="ion-person"></i> Profile </a></li>
                                <li><a href="#"><i class="ion-settings"></i> Settings <span class="label label-primary">3/9</span></a></li>
                                <li><a href="#"><i class="ion-calendar"></i> Calendar </a></li>
                                <li><a href="#"><i class="ion-ios-compose"></i> Tasks </a></li>
                                <li><a href="logout"><i class="ion-log-out"></i> Logout </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </header>
            <div id="hoeapp-container" hoe-color-type="lpanel-bg7" hoe-lpanel-effect="shrink">
                <aside id="hoe-left-panel" hoe-position-type="absolute">

                    <ul class="nav panel-list">

                        <li>
                            <a href="index.html">
                                <i class="fa fa-home"></i>
                                <span class="menu-text">Inicio</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="auth">
                                <i class="fa fa-users"></i>
                                <span class="menu-text">Usuarios</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="hoe-has-menu">

                            <a href="javascript:void(0)">
                                <i class="fa fa-bus"></i>
                                <span class="menu-text">Empresas</span>
                                <span class="selected"></span>
                            </a>
                            <ul class="hoe-sub-menu">
                                <li>
                                    <a href="companies">
                                        <span class="menu-text">Empresas</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-compose.html">
                                        <span class="menu-text">Lineas</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-view.html">
                                        <span class="menu-text">Recorridos</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="hoe-has-menu">
                            <a href="javascript:void(0)">
                                <i class="fa fa-map-o"></i>
                                <span class="menu-text">Maps</span>
                                <span class="selected"></span>
                            </a>
                            <ul class="hoe-sub-menu">
                                <li>
                                    <a href="map-vector.html">
                                        <span class="menu-text">Vector map</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="map-google.html">
                                        <span class="menu-text">Google map</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="hoe-has-menu">
                            <a href="javascript:void(0)">
                                <i class="fa fa-cogs"></i>
                                <span class="menu-text">Configuración</span>
                                <span class="selected"></span>
                            </a>
                            <ul class="hoe-sub-menu">
                                <li>
                                    <a href="ui-buttons.html">
                                        <span class="menu-text">Buttons</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">
                                        <span class="menu-text">typography</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="ui-tabs.html">
                                        <span class="menu-text">Tabs</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-alerts.html">
                                        <span class="menu-text">Alerts</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-tooltip_popovers.html">
                                        <span class="menu-text">Tooltips & popovers</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </aside><!--aside left menu end-->


                <!--start main content-->
                <section id="main-content">
                    <div class="space-30"></div>
                    <div class="container"
