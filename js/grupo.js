$(function () {
    $('select').material_select();
    $.ajax({url : "listar/listaCarreras.php",type : "POST",
        success : function(resp) {
            $("#carrera").html(resp);
        }
    });
    $("#buscarAlumno").autocomplete({
        source:"listar/autoCompleteAlumno.php",
        minLength: 2,
        select: function( event, ui ) {
            $("#id_alumno").val(ui.item.id);
            $("#nombre").focus();
        }
    });
});

function guardar(){
    var formulario = $("form").serialize();
    if($("#proyecto").val() == 0){
        alert("Debe ingresar un proyecto");
        return false;
    }
    $.ajax({
        url : "guardar/guardarGrupo.php",
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
    var id_alumno = $("#id_alumno").val();
    var cedula = $("#buscarAlumno").val();
    $.ajax({
        url : "buscar/buscarAlumnoGrupo.php",
        type : "POST",
        data:"cedula="+cedula,
        dataType : "json",
        success : function(json) {
            //alert(json);
            if(json['respuesta']=="si"){
                if(json.proyecto=='si'){
                    $("#apellido").val(json.apellido);
                    $("#apellido").focus();
                    $("#carrera").val(json.id_carrera);
                    $("#nombre").val(json.nombre);
                    $("#nombre").focus();
                    $("#id_alumno").val(json.id);
                    llenaProyecto();
                }else{
                    alert("El alumno ya esta asignado a un proyecto");
                    $("#buscarAlumno").val('');
                }

            }else {
                $("#proyecto").val('');
                $('form').each(function () {
                    this.reset();
                });
                $("#id_alumno").val(0);
                alert("Alumno No Registrado");
                $("#proyecto").html('');
            }

        }
    });
}

function llenaProyecto(){
    $.ajax({url : "listar/listaProyectoCarrera.php",type : "POST",data:"carrera="+$("#carrera").val(),
        success : function(resp) {
            $("#proyecto").html(resp);
        }
    });
}