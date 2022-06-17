 <!doctype html>
            <html lang="es">

            <html>
                <head>
                <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
                    <title>Horario</title>
                  
                    <?php require_once "scripts.php"; ?>
                   
                    <script src="js/index.js" type="text/javascript"></script>
                    
                </head>

                <body>
                    <div id='ajaxBusy'></div>
                    <div class="wrapper">
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