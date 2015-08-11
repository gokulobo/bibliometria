$(function () {
    $('select').material_select();
    estados();
});

function estados(){
    $.ajax({
        url : "listar/listarEstado.php",
        type : "POST",
        success : function(resp) {
            $("#estado").html(resp);
            $("#estadoP").html(resp);
        }

    });
}

function buscaMunicipio(){
    var estado = $("#estadoP").val();
    $.ajax({
        url : "listar/listarMunicipio.php",
        data: "estado="+estado,
        type : "POST",
        success : function(resp) {
            $("#municipio").html(resp);
        }

    });
}


function guardarMunicipio(){
    var formulario = $("#form1").serialize();
    $.ajax({
        url : "guardar/guardarMunicipio.php",
        type : "POST",
        data:formulario,
        success : function(resp) {
            alert(resp);
            $('#form1').each (function(){
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
}
function guardarParroquia(){
    var formulario = $("#form2").serialize();
    $.ajax({
        url : "guardar/guardarParroquia.php",
        type : "POST",
        data:formulario,
        success : function(resp) {
            alert(resp);
            $('#form2').each (function(){
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
}