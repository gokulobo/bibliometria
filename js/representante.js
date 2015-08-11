$(function () {
    $('select').material_select();
});

/*$(function () {
 $.ajax({url : "listarComunidad.php",type : "POST",
 success : function(resp) {
 $("#id_comunidad").html(resp);
 }
 });
 });*/

function guardar(){
    var formulario = $("form").serialize();
    alert(formulario);
    $.ajax({url : "guardar/guardarRepresentante.php",type : "POST",data:formulario,
        success : function(resp) {
            alert(resp);

        }
    });
    return false;

}