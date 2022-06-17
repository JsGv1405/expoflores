<?php

include "../../../model/conectionBD.php";
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