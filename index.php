
            <!doctype html>
            <html lang="es">

                <head>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <!--plugins-->
                    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
                    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
                    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
                    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
                    <!-- Bootstrap CSS -->
                    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
                    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
                    <link href="assets/css/style.css" rel="stylesheet" />
                    <link href="assets/css/icons.css" rel="stylesheet">

                    <!-- ICONS -->
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
                    <!-- FONTS -->
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

                    <!-- loader-->
                    <link href="assets/css/pace.min.css" rel="stylesheet" />

                    <!--Theme Styles-->
                    <link href="assets/css/dark-theme.css" rel="stylesheet" />
                    <link href="assets/css/light-theme.css" rel="stylesheet" />
                    <link href="assets/css/semi-dark.css" rel="stylesheet" />
                    <link href="assets/css/header-colors.css" rel="stylesheet" />

                    <!--Notificaiones-->
                    <link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css" />


                    <title>Prueba Técnica</title>
                </head>

                <body>
                    <!--start wrapper-->
                    <div class="wrapper">
                        <?php

                        ?>



                        <!--start top header-->
                        <div class="container">
                        <header class="top-header">        
                            <nav class="navbar navbar-expand gap-3">
                                <div class="mobile-toggle-icon fs-3">
                                    <i class="bi bi-list"></i>
                                </div>
                                <form class="searchbar" onsubmit="return redireccionInit();">

                                    <datalist id="datalistOptionsInicio"></datalist>

                                </form>
                                <div class="top-navbar-right ms-auto">
                                    <ul class="navbar-nav align-items-center">
                                        <li class="nav-item search-toggle-icon">
                                            <a class="nav-link" href="#">

                                            </a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-user-setting" id="headerUno">

                                            <a class = "nav-link dropdown-toggle dropdown-toggle-nocaret" href = "#" data-bs-toggle = "dropdown">
                                                <div class = "user-setting d-flex align-items-center">



                                                </div>
                                            </a>
                                            <ul class = "dropdown-menu dropdown-menu-end" >
                                                <li>
                                                    <a class = "dropdown-item" href = "#" >
                                                        <div class = "d-flex align-items-center">                        
                                                            <div class = "ms-3">
                                                                <h6 class = "mb-0 dropdown-user-name"></h6>
                                                                <small class = "mb-0 dropdown-user-designation text-secondary"></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li><hr class = "dropdown-divider"></li>
                                                <li>
                                                    <a class = "dropdown-item" href = "/gled/privado/usuarios/miUsuario.php">
                                                        <div class = "d-flex align-items-center">
                                                            <div class = ""><i class = "bi bi-person-fill"></i></div>
                                                            <div class = "ms-3"><span>Usuario:</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li><hr class = "dropdown-divider"></li>
                                                <li>
                                                    <a class = "dropdown-item" href = "/gled/salir.php">
                                                        <div class = "d-flex align-items-center">
                                                            <div class = ""><i class = "bi bi-lock-fill"></i></div>
                                                            <div class = "ms-3"><span>Cerrar sesión</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </header>
                        </div>
                        <!--end top header-->

                        <!--start sidebar -->
                        <aside class="sidebar-wrapper" data-simplebar="true">
                            <div class="sidebar-header">


                                <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
                                </div>
                            </div>
                            <!--navigation-->
                            <ul class="metismenu" id="menu">

                                <li>
                                    <a href="/picoyplaca/index.php" class="has-arrow">
                                        <div class="parent-icon"><i class="bi bi-house-fill"></i>
                                        </div>
                                        <div class="menu-title">Inicio</div>
                                    </a>
                                </li>

                                <li class="menu-label">Pico y Placa</li>
                                <li>
                                     <a href="/picoyplaca/contenido/consultar/index.php">
                                     <div class="parent-icon"><i class="bi bi-search"></i></div>
                                     <div class="menu-title">Consulta</div>
                                     </a>

                                </li>
                                <li>
                                     <a href="/picoyplaca/contenido/configurar/index.php">
                                     <div class="parent-icon"><i class="bi bi-columns"></i></div>
                                     <div class="menu-title">Configuración de Tablas</div>
                                     </a>

                                </li>


                            </ul>
                            <!--end navigation-->
                        </aside>
                        <!--end sidebar -->
                       
                        <!--start content-->
                        <main class="page-content">
                            
                                <div style="width:400px; height:300px; background-color:#F2F3F4; margin:50px; margin-left:250px" class="col-center">
                                <img src="img/quito2.png" style="width:60%; margin-left:50px; margin-bottom:15px">   
                                <p>Prueba Técnica</p>
                                    <h1><b>Autor:Jorge Sebastián Gutiérrez Valverde</b></h1>
                                    <p>Horarios de Pico Y Placa de la Ciudad de Quito</p>
                                   
                                </div>

                       
                           
                              
                        </main>
                        <!--end page main-->

                        <!--start overlay-->
                        <div class="overlay nav-toggle-icon"></div>
                        <!--end overlay-->

                        <!--Start Back To Top Button-->
                        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
                        <!--End Back To Top Button-->

                        <!--start switcher-->
                       
                    </div>
                    <!--end wrapper-->


                    <!-- Bootstrap bundle JS -->
                    <script src="assets/js/bootstrap.bundle.min.js"></script>
                    <!--plugins-->
                    <script src="assets/js/jquery.min.js"></script>

                    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
                    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
            
                    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
                    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
                    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
                    <script src="assets/js/pace.min.js"></script>
                    <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
                    <script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
                   
                    <!--app-->
                    <script src="assets/js/app.js"></script>
                    <script src="assets/js/index2.js"></script>



                    <!--Notificaciones-->
                    <script src="assets/plugins/notifications/js/lobibox.js"></script>
                    <script src="assets/plugins/notifications/js/notifications.min.js"></script>
                    <script src="assets/plugins/notifications/js/notification-custom-script.js"></script>

                </body>

            </html>
