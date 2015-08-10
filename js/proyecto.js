$(function () {

    $('select').material_select();

});

$(function () {
    $.ajax({url : "listaCarreras.php",type : "POST",
        success : function(resp) {
            $("#id_carrera").html(resp);
        }
    });
    $.ajax({url : "listarComunidad.php",type : "POST",
        success : function(resp) {
            $("#id_comunidad").html(resp);
        }
    });
    $.ajax({url : "listaDocente.php",type : "POST",
        success : function(resp) {
            $("#id_docente").html(resp);
        }
    });
    $.ajax({url : "listaProyectos.php",type : "POST",
        success : function(resp) {
            $("#id_proyecto").html(resp);
        }
    });
});

function guardar(){
    var formulario = $("form").serialize();
    alert(formulario);
    $.ajax({
        url : "guardar/guardarProyecto.php",
        type : "POST",
        data:formulario,
        success : function(resp) {
            alert(resp);

        }
    });
    return false;

}

function buscar(){
    var id_proyecto = $("#id_proyecto").val();

    $.ajax({url : "buscar/buscarProyecto.php",type : "POST",data:"id_proyecto="+id_proyecto,dataType : "json",
        success : function(json) {
            //alert(json);
            if(json['respuesta']=="si"){
                $("#titulo_proyecto").val(json.titulo_proyecto);
                $("#area_investigacion").val(json.area_investigacion);
                $("#tipo_proyecto").val(json.tipo_proyecto);
                $("#apoyo").val(json.apoyo);
                $("#tipo_apoyo").val(json.tipo_apoyo);
                $("#resumen_proyecto").val(json.resumen_proyecto);
                $("#id_docente").val(json.id_docente);
                $("#id_carrera").val(json.id_carrera);
                $("#id_comunidad").val(json.id_comunidad);
            }

        }
    });
}