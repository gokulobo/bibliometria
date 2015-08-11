$(function () {
    $('select').material_select();
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
    $.ajax({url : "guardar/guardarInvestigacion.php",type : "POST",data:formulario,
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