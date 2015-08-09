$(function () {
    $('select').material_select();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
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
    $.ajax({
        url : "guardar/guardarArticulo.php",
        type : "POST",
        data:formulario,
        success : function(resp) {
            alert(resp);
        }
    });
    return false;
}