
$(function () {
    $("#ocultar").hide();
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
    $.ajax({
        url : "listar/listaCohorte.php",
        type : "POST",
        success : function(resp) {
            $("#cohorte").html(resp);
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
    var arregloAlumnos = new Array();
    var i = 0;
    $("#alumnos option").each(function(){
        arregloAlumnos[i] = $(this).val();
        i++
    });
    //alert(arregloAlumnos);
    $.ajax({
        url : "guardar/guardarProyecto.php",
        type : "POST",
        data:formulario+"&arreglo="+arregloAlumnos,
        success : function(resp) {
            alert(resp);
            $('form').each (function(){
                this.reset();
                $("#alumnos").html('');
                $("#alum").html('');
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
                $("#cohorte").val(json.id_cohorte);
                $("#estatus").val(json.estatus);
                $("#observaciones").focus();
                $("#observaciones").val(json.observaciones);
                $("#carrera2").focus();
                $("#carrera2").val(json.carrera2);
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

function listarDocenteCarrera(){
    var id_carrera = $("#id_carrera").val();
    $.ajax({url : "listar/listaDocenteCarrera.php",type : "POST",data:"id_carrera="+id_carrera,
        success : function(resp) {
            $("#id_docente").html(resp);
        }
    });
}

function listarAlumnosCohorte(){
    var id_carrera = $("#id_carrera").val();
    var cohorte = $("#cohorte").val();
    $.ajax({url : "listar/listarAlumnosCohorte.php",type : "POST",data:"id_carrera="+id_carrera+"&id_cohorte="+cohorte,
        success : function(resp) {
            $("#alum").html(resp);
        }
    });
}

function agregar(){
    var valor = $("#alum").val();
    var texto = $("#alum option:selected").text();
    var tiene = $('#alumnos option').length;
    if(tiene >= limiteProyecto){
        alert("Ya no puede agregar mas alumnos a este proyecto");
        return false;
    }
    $("#alumnos").append(new Option(texto, valor, true, true));
    $("#alum option:selected").remove();
}

function quitar(){
    var valor = $("#alumnos").val();
    var texto = $("#alumnos option:selected").text();
    if(texto != ""){
        $("#alum").append(new Option(texto, valor, true, true));
        $("#alumnos option:selected").remove();
    }

}

function verificarTipo(){
    var tipo = $("#tipo_proyecto").val();
    if(tipo == 'Socio Integrador')$("#ocultar").show();
    else $("#ocultar").hide();
}