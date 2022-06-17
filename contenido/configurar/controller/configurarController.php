<?php

include "../model/configuracionModel.php";
$aux = $_POST["aux"];
if($aux=="guardarConfiguracion"){
    $dia=$_POST["dia"];
    $placa1=$_POST["placa1"];
    $placa2=$_POST["placa2"];
    $guardarDatos=guardarDatos($dia,$placa1,$placa2);
    echo $guardarDatos;
}
if($aux=="consultarHorario"){
    $horarios = consultarHorario();
    ?>
    <table class="table table-hover table-striped" id="tablaClientes">
        <thead>
            <tr>
                <th>Día</th>
                <th>Horario</th>
                <th>#Placa</th>
                <th>#Placa</th>
        <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($horarios as $auxLista) {
                ?>
            <tr>
                <td><?php echo $auxLista["dia"]; ?></td>
                <td><?php echo $auxLista["horario"]; ?></td>
                <td><?php echo $auxLista["placa1"]; ?></td>
                <td><?php echo $auxLista["placa2"]; ?></td>
                <td><button class="btn btn-primary" onclick="editarHorario('<?php echo $auxLista["dia"];  ?>','<?php echo $auxLista["placa1"];  ?>','<?php echo $auxLista["placa2"];  ?>','<?php echo $auxLista["horario"];  ?>')"><i class="bi bi-pencil" title="Editar"></i></button></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
            }

    
?>
