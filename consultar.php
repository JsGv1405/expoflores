 <!doctype html>
            <html lang="es">

            <html>
                <head>
                <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
                    <title>Horario</title>
                  
                    <?php require_once "scripts.php"; ?>
                   
                    <script src="js/consultar.js" type="text/javascript"></script>
                    
                </head>

                <body>
                    <div id='ajaxBusy'></div>
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
                                 <a href="index.php" class="has-arrow">
                                     <div class="parent-icon"><i class="bi bi-house-fill"></i>
                                     </div>
                                     <div class="menu-title">Inicio</div>
                                 </a>
                             </li>

                             <li class="menu-label">Pico y Placa</li>
                             <li>
                                  <a href="consultar.php">
                                  <div class="parent-icon"><i class="bi bi-search"></i></div>
                                  <div class="menu-title">Consulta</div>
                                  </a>

                             </li>
                             <li>
                                  <a href="configurar.php">
                                  <div class="parent-icon"><i class="bi bi-columns"></i></div>
                                  <div class="menu-title">Configuración de Tablas</div>
                                  </a>

                             </li>


                         </ul>
                         <!--end navigation-->
                     </aside>
                     <!--end sidebar -->

                        <div class="viewlead">
                        <main class="page-content">
                            
                            <br>
                            <br>
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom viewdiv">
        <h2 class="h4">Consultar Horario Pico y Placa</h2>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <form class="form-lead-filter" method="POST">

    
</form>

            <div class="container-fluid" style="margin-top: 30px;">
            <h5 class="col-center">Ingrese Placa</h5>
            <div class="file-input text center pl-5" style="position: relative; top:20px">
                <div class="row">
                    <div class="col-2">
                    <input type="text" id="placa1" class="form-control from-control-lg", placeholder="Placa ..." style="position: relative; left:22rem; text-transform:uppercase" onkeydown="return /[a-z]/i.test(event.key)">
                    </div>
                    <div class="col-2">
                        <p class="col-center"  style="position: relative; left:16rem">-</p>
                    </div>
                    <div class="col-2">
                    <input type="number" id="placa2" class="form-control form-control decimales", placeholder="Placa ..."  style="position: relative; right:-10rem">
                    </div>
                </div>
               
            </div>
            <br>
            <div class="col-center pt-5">
            <button class="btn btn-primary btn-block " onclick="Consultar();">Consultar</button>

            </div>
            

            </div>
        
        <!-- pagination -->
      
        


                        </main>
                        </div>
                    </div>


                <div id="consultarPlaca" class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"> <i class="bi bi-plus-lg"> </i>Pico y Placa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                  
                                       <h4 class="col-center" >La Placa</h4>
                                        <div class="col-center">
                                        <input type="text" class="form-control from-control-lg align-items-center " id="placa" readonly>
                                        </div>
                                        <br>
                                        <h4 class="col-center" >Puede Circular Normalmente los Días:</h4>
                                        <div class="container-fluid" style="margin-top: 30px;">
                                                <div class="row">
                                                    <div class="table-responsive">
                                                        <div id="divTablePicoyPlaca" class="col-center">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>   
                                        <br>
                                       
                                        <br>
                                        <div class="container-fluid" style="margin-top: 30px;">
                                        <h4 class="col-center" >Tiene Restricción el Día:</h4>
                                                <div class="row">
                                                    <div class="table-responsive">
                                                        <div id="divTablePicoyPlaca2" class="col-center">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>   
                                    </div>
                              
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                               
                            </div>
                        </div>
                    </div>






                       
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
                    

                   
                    
                </body>

            </html>
