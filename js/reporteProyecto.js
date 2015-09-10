$(function () {
    $("#phpGrid").load("gridProyecto.php");
    listar();
});

function listar(){
    $.ajax({url : "reportes/proyectos.php",type : "POST",
        success : function(respuesta) {
            $("#resultado").html(respuesta);
        }
    });

}