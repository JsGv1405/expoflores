$(document).ready(function () {
    consultarHorarios();
    $('#placa1a').select2({
        dropdownParent: $('#configuracionPicoyPlaca')
    });
    $('#placa2a').select2({
        dropdownParent: $('#configuracionPicoyPlaca')
    });
});

function consultarHorarios(){

    var cadena = "aux=consultarHorario";
    $.ajax({
        type: "POST",
        url: "controller/configurarController.php",
        data: cadena,
        success: function (data) {
            $("#divTablePicoyPlaca").html(data);

        },
        error: function (e) {
            console.log(e);
            error_noti("Sistema no disponible");
        }
    });

}

const editarHorario=(dia,placa1,placa2,horario)=>{
    let diaEdit=dia;
    let placa1Edit=placa1;
    let placa2Edit=placa2;
    $('#configuracionPicoyPlaca').modal({backdrop: 'static', keyboard: false});
    $("#configuracionPicoyPlaca").modal("show");

    document.getElementById("dia").value=diaEdit;
    document.getElementById("placa1a").value=placa1Edit;
    document.getElementById("placa2a").value=placa2Edit;
    document.getElementById("horario").value=horario;
}

const guardar=()=>{
    let diaGuardar=document.getElementById("dia").value;
    let placa1Guardar=document.getElementById("placa1a").value;
    let placa2Guardar=document.getElementById("placa2a").value;
    let cadena="aux=guardarConfiguracion&dia="+diaGuardar+"&placa1="+placa1Guardar+"&placa2="+placa2Guardar;
     $.ajax({
        type: "POST",
        url: "controller/configurarController.php",
        data: cadena,
        success: function (data) {
            if (data == true) {
                consultarHorarios();
                $("#configuracionPicoyPlaca").modal("hide");
                success_noti("Información Actualizada!");
               
            }
        },
        error: function (e) {
            console.log(e);
            error_noti("Sistema no disponible");
        }
    });
}