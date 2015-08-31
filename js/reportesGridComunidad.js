$(function () {
    $("#phpgrid").load("gridComunidad.php");
});

function buscar(){
    var rif = $("#rif").val();
    if(rif == "") {
        alert("Debe ingresar una rif");
        return false;
    }
    $.ajax({url : "buscar/buscarcomunidadEdita.php",type : "POST",data:"rif="+rif,
        success : function(respuesta) {
            $("#resultado").html(respuesta);
        }
    });

}