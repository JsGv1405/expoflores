<?php

include "../../../model/conectionBD.php";
function consultarHorario(){


    $conexion = conection();
    $sqlBuscar = "SELECT * FROM dias";
    $result = mysqli_query($conexion, $sqlBuscar);
    return $result;

}

function guardarDatos($dia,$placa1,$placa2){
    $conexion = conection();
    $sqlBuscar = "UPDATE `dias` SET `placa1`='$placa1',`placa2`='$placa2'  WHERE (`dia`='$dia');";
    $result = mysqli_query($conexion, $sqlBuscar);
    //echo $sqlBuscar;
    if ($result) {
        return true;
    } else {
        return false;
    }
}