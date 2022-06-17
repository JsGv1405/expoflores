$(document).ready(function () {

});


const Consultar=()=>{

    let letras=document.getElementById('placa1').value;
    let numeros=document.getElementById('placa2').value;
    if(letras.length ==3 && (numeros.length ==3 || numeros.length ==4) ){
        mostrardias(letras,numeros);
    }else{
        error_noti("Placa Invalida");
    }
   
}

const mostrardias=(letras,numeros)=>{
    $('#consultarPlaca').modal({backdrop: 'static', keyboard: false});
    $("#consultarPlaca").modal("show");
    let cadena=letras.toUpperCase()+"-"+numeros;
    let numeroFinal=numeros.slice(-1)
    document.getElementById('placa').value=cadena;
    var cadena2 = "aux=consultarHorario&numeroFinal="+numeroFinal;
    $.ajax({
        type: "POST",
        url: "../contenido/consultar/controller/consultarController.php",
        data: cadena2,
        success: function (data) {
            $("#divTablePicoyPlaca").html(data);

        },
        error: function (e) {
            console.log(e);
            error_noti("Sistema no disponible");
        }
    });
    var cadena2 = "aux=consultarHorario2&numeroFinal="+numeroFinal;
    $.ajax({
        type: "POST",
        url: "../contenido/consultar/controller/consultarController.php",
        data: cadena2,
        success: function (data) {
           
            $("#divTablePicoyPlaca2").html(data);

        },
        error: function (e) {
            console.log(e);
            error_noti("Sistema no disponible");
        }
    });


}
