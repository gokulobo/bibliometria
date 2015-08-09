$(function () {

});

function buscar(){
    var cedula = $("#cedula").val();
    if(cedula == "") {
        alert("Debe ingresar una cedula");
        return false;
    }
    $.ajax({url : "buscarDocente.php",type : "POST",data:"cedula="+cedula,dataType : "json",
        success : function(json) {
            $("#nombre").val(json.nombre);
            $("#ced").val(cedula);
            $("#apellido").val(json.apellido);
            $("#correo").val(json.correo);
            $("#id_docente").val(json.id_docente);
        }
    });

}

function guardar(){
    var formulario = $("form").serialize();
    $.ajax({
        url : "guardarArticulo.php",
        type : "POST",
        data:formulario,
        success : function(resp) {
            alert(resp);
        }
    });
    return false;
}