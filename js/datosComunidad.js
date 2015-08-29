$(function () {
    $("#proyecto").autocomplete({
        source:"listar/autoCompleteProyecto.php",
        minLength: 2,
        select: function( event, ui ) {
            $("#id_proyecto").val(ui.item.id);
        }
    });
});

function  buscar(){
    var id = $("#id_proyecto").val();
    if(id == 0){
        alert("Debe seleccionar un proyecto existente");
        return false;
    }
    $.ajax({url : "reportes/reporte2.php",
        type : "POST",
        data:"id_proyecto="+id,
        success : function(resp) {
            //alert(resp);
            $("#reporte").html(resp);
        }
    });
}