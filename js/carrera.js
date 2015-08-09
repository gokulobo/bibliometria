$(function () {
    $.ajax({url : "listarSede.php",type : "POST",
        success : function(resp) {
            $("#id_sede").html(resp);
        }
    });

});
function guardar(){
    var formulario = $("form").serialize();
    $.ajax({url : "guardarCarrera.php",type : "POST",data:formulario,
        success : function(resp) {
            alert(resp);
        }
    });
    return false;
}