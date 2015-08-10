$(function () {
    $('select').material_select();
});

function guardar(){
    var formulario = $("form").serialize();
    //alert(formulario);
    $.ajax({url : "guardar/guardarComunidad.php",type : "POST",data:formulario,
        success : function(resp) {
            alert(resp);

        }
    });
    return false;

}
