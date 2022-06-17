<?php
session_start();
$so = php_uname();
$windows = stripos($so, "Windows");
$path_so = "";
if ($windows !== false) {
    $path_so = "C:/xampp/htdocs/picoyplaca/cabecera.php";
} else {
    $path_so = "/var/www/html/picoyplaca/cabecera.php";
}
?>
            <!doctype html>
            <html lang="es">

            <html>
                <head>
                <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
                    <title>Configuración</title>
                  
                    <?php require_once "scripts.php"; ?>
                   
                    <script src="js/index5.js" type="text/javascript"></script>
                    
                </head>

                <body>
                    <div id='ajaxBusy'></div>
                    <div class="wrapper">
                        <div class="viewlead">
                        <main class="page-content">
                            <?php require_once $path_so; ?>
                            <br>
                            <br>
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom viewdiv">
        <h2 class="h4">Horario Pico y Placa</h2>
        
    </div>
    <form class="form-lead-filter" method="POST">

    
</form>

            <div class="container-fluid" style="margin-top: 30px;">
                    <div class="row">
                        <div class="table-responsive">
                            <div id="divTablePicoyPlaca" class="col-center">
                            </div>
                        </div>
                </div>
            </div>
  
      


                        </main>
                        </div>
                    </div>


 <div id="configuracionPicoyPlaca" class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"> <i class="bi bi-plus-lg"> </i>Configurar Pico y Placa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                    <!-- FORM TO ADD TASKS -->
                                        <div class="col-center">
                                            <input type="text" class="form-control from-control-sm col-center" id="dia" style="width: 8rem;" readonly>
                                            <label for="" class="col-center">Placas Con Restricción</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="placa1a" id="placa1a" class="form-select col-center">
                                                        <?php
                                                            for ($i = 0; $i <= 9; $i++){
                                                                ?>
                                                                 <option value="<?php echo $i ?>"><?php echo $i?></option>
                                                                 <?php
                                                            }
                                                        ?>
                                                       
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <select name="placa2a" id="placa2a" class="form-select col-center">
                                                        <?php
                                                            for ($i = 0; $i <= 9; $i++){
                                                                ?>
                                                                 <option value="<?php echo $i ?>"><?php echo $i?></option>
                                                                 <?php
                                                            }
                                                        ?>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <label for="" class="col-center">Horario Con Restricción</label>
                                            <input type="text" class="form-control from-control-sm col-center" id="horario" style="width: 18rem;" readonly>
                                            
                                            </div>
                                        </div>
                                      
                                    </div>
                              
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" onclick="guardar();" style="width: 100px;">Guardar</button>
                                    
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
