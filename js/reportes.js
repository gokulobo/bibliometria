$(function () {
    $("#phpgrid").load("reportes/docente.php");
});

function buscar(){
    var cedula = $("#cedula").val();
    if(cedula == "") {
        alert("Debe ingresar una cedula");
        return false;
    }
    $.ajax({url : "buscar/buscarDocenteGeneral.php",type : "POST",data:"cedula="+cedula,
        success : function(respuesta) {
            $("#resultado").html(respuesta);
        }
    });

}