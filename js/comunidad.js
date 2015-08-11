$(function () {
    $('select').material_select();
    estados();
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

function buscaMunicipio(){
    var estado = $("#estado").val();
    $.ajax({
        url : "listar/listarMunicipio.php",
        data: "estado="+estado,
        type : "POST",
        success : function(resp) {
            $("#municipio").html(resp);
        }

    });
}

function buscaParroquia(){
    var municipio = $("#municipio").val();
    $.ajax({
        url : "listar/listarParroquia.php",
        data: "municipio="+municipio,
        type : "POST",
        success : function(resp) {
            $("#parroquia").html(resp);
        }

    });
}

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