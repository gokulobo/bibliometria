$(function () {
    $("#phpgrid").load("gridAlumno.php");
});

function buscar(){
    var cedula = $("#cedula").val();
    if(cedula == "") {
        alert("Debe ingresar una cedula");
        return false;
    }
    $.ajax({url : "buscar/buscarAlumno.php",type : "POST",data:"cedula="+cedula,
        success : function(respuesta) {
            $("#resultado").html(respuesta);
        }
    });

}