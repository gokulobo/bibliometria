$(function () {
    $('select').material_select();
    $.ajax({url : "listar/listaCarreras.php",type : "POST",
        success : function(resp) {
            $("#id_carrera").html(resp);
        }
    });
    $.ajax({url : "listar/listaDocente.php",type : "POST",
        success : function(resp) {
            $("#id_docente").html(resp);
        }
    });
    $.ajax({
        url : "listar/listarComunidad.php",
        type : "POST",
        success : function(resp) {
            $("#id_comunidad").html(resp);
        }

    });
    $.ajax({
        url : "listar/listaProyectos.php",
        type : "POST",
        success : function(resp) {
            $("#id_proyecto").html(resp);
        }

    });

    $("#buscarProyecto").autocomplete({
        source:"listar/autoCompleteProyecto.php",
        minLength: 2,
        select: function( event, ui ) {
            $("#id_proyecto").val(ui.item.id);
            $("#titulo_proyecto").focus();
        }
    });
});

function guardar(){
    var formulario = $("form").serialize();
    //alert(formulario);
    $.ajax({
        url : "guardar/guardarProyecto.php",
        type : "POST",
        data:formulario,
        success : function(resp) {
            alert(resp);
            $('form').each (function(){
                this.reset();
            });

            /*if(confirm("Se proceso con exito.¿Desea ingresar otro docente ?")){
             $('#frmDocente').each (function(){
             this.reset();
             });
             }else{
             window.location="inicio.php";
             }*/

        }
    });
    return false;

}

function buscar(){
    var id_proyecto = $("#id_proyecto").val();
    var titulo = $("#buscarProyecto").val();
    $.ajax({
        url : "buscar/buscarProyecto.php",
        type : "POST",
        data:"id_proyecto="+id_proyecto+"&titulo="+titulo,
        dataType : "json",
        success : function(json) {
            //alert(json);
            if(json['respuesta']=="si"){

                $("#titulo_proyecto").val(json.titulo_proyecto);
                $("#area_investigacion").focus();
                $("#area_investigacion").val(json.area_investigacion);
                $("#tipo_proyecto").focus();
                $("#tipo_proyecto").val(json.tipo_proyecto);
                $("#apoyo").focus();
                $("#apoyo").val(json.apoyo);
                $("#tipo_apoyo").focus();
                $("#tipo_apoyo").val(json.tipo_apoyo);
                $("#resumen_proyecto").focus();
                $("#resumen_proyecto").val(json.resumen_proyecto);
                $("#id_docente").val(json.id_docente);
                $("#id_carrera").val(json.id_carrera);
                $("#id_comunidad").val(json.id_comunidad);
                $("#observaciones").focus();
                $("#observaciones").val(json.observaciones);
                $("#titulo_proyecto").focus();
            }else {
                $('form').each(function () {
                    this.reset();
                });
                $("#id_proyecto").val(0);
                alert("Proyecto no existe");

            }

        }
    });
}