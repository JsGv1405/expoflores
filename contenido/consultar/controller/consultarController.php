<?php

$aux = $_POST["aux"];
$numeroFinal=$_POST["numeroFinal"];
$aux = $_POST["aux"];
$numeroFinal=$_POST["numeroFinal"];
if($aux=="consultarHorario"){
    $horarios = consultarHorario2($numeroFinal);
    ?>
    <table class="table table-hover table-striped" >
        <thead>
            <tr>
                <th>Día</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            foreach ($horarios as $auxLista) {
                $i=$i+1;
            }
            if($i<5){
                foreach ($horarios as $auxLista) {

                    ?>
                    <tr>
                        <td><?php echo $auxLista["dia"]; ?></td>
                
                    </tr>
                <?php
                }
            }
            if($i>4)
            {
                $horarios2 = consultarHorario2a($numeroFinal);
                foreach ($horarios2 as $auxLista) {

                    ?>
                    <tr>
                        <td><?php echo $auxLista["dia"]; ?></td>
                
                    </tr>
                <?php
                }
            }
            ?>
        </tbody>
    </table>
<?php
    }
    if($aux=="consultarHorario2"){
        $horarios = consultarHorario2b($numeroFinal);
    ?>
          <table class="table table-hover table-striped" >
          <thead>
                <tr>
                    <th>Día</th>                     
                    <th>Horario</th>
                </tr>
          </thead>
             <tbody>
                        <?php
                            foreach ($horarios as $auxLista) {
            
                                ?>
                                <tr>
                                    <td><?php echo $auxLista["dia"]; ?></td>
                                    <td><?php echo $auxLista["horario"]; ?></td>
                                </tr>
                            <?php
                            }
                        ?>
                    </tbody>
                </table>
                <?php
    }

function consultarHorario2($numeroFinal){


    $conexion = conection();
    $sqlBuscar = "SELECT * FROM dias Where placa1<>$numeroFinal" ;
    $result = mysqli_query($conexion, $sqlBuscar);
    return $result;
    
    }

function consultarHorario2a($numeroFinal){


        $conexion = conection();
        $sqlBuscar = "SELECT * FROM dias Where placa2<>$numeroFinal" ;
        $result = mysqli_query($conexion, $sqlBuscar);
        return $result;
        
}

function consultarHorario2b($numeroFinal){


    $conexion = conection();
    $sqlBuscar = "SELECT * FROM dias Where  placa1=$numeroFinal OR placa2=$numeroFinal" ;
    $result = mysqli_query($conexion, $sqlBuscar);
    return $result;
    
}
?>

