$(function () {
    $("#phpgrid").load("gridAlumno.php");
    listar();
});

function listar(){
    $.ajax({url : "reportes/alumnos.php",type : "POST",
        success : function(respuesta) {
            $("#resultado").html(respuesta);
        }
    });

}