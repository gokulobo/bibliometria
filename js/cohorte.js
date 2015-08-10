$(function () {
    $('select').material_select();
});

function guardar(){
    var formulario = $("form").serialize();
    $.ajax({url : "guardar/guardarCohorte.php",type : "POST",data:formulario,
        success : function(resp) {
            alert(resp);
        }
    });
    return false;
}