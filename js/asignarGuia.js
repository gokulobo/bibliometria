$(function () {
    $('select').material_select();
    $.ajax({
        url : "listar/listaCohorte.php",
        type : "POST",
        success : function(resp) {
            $("#cohorte").html(resp);
        }
    });
});

function buscar(){
    var cedula = $("#cedula").val();
    if(cedula == "") {
        alert("Debe ingresar una cedula");
        return false;
    }
    $.ajax({url : "buscar/buscarDocente.php",type : "POST",data:"cedula="+cedula,dataType : "json",
        success : function(json) {
            $("#nombre").focus();
            $("#nombre").val(json.nombre);
            $("#ced").focus();
            $("#ced").val(cedula);
            $("#apellido").focus();
            $("#apellido").val(json.apellido);
            $("#id_docente").val(json.id_docente);
        }
    });

}

function guardar(){
    var formulario = $("form").serialize();
    alert(formulario);
    $.ajax({url : "guardar/guardarAsigGuia.php",type : "POST",data:formulario,
        success : function(resp) {
            alert(resp);
            $("#form1")[0].reset();
        }
    });
    return false;
}