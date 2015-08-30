$(function () {
    $('select').material_select();
    $.ajax({url : "listar/listaProyectos.php",type : "POST",
        success : function(resp) {
            $("#id_proyecto").html(resp);
        }
    });
});

function subir(){
    var formData = new FormData($("form")[0]);
    var message = "";
    var id = $("#id_proyecto").val();
    if(id == 0){
        alert("Debe Seleccionar Proyecto");
        return false;
    }
    $.ajax({
        url: 'subir.php',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            $("#mensaje").html("Subiendo, por favor espere");;
        },
        //una vez finalizado correctamente
        success: function(respuesta){
            $("#mensaje").html(respuesta);
        },
    });
    return false;
}