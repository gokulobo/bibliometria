$(function () {
    $.ajax({url : "listar/listarSede.php",type : "POST",
        success : function(resp) {
            $("#id_sede").html(resp);
        }
    });

});
function guardar(){
    var formulario = $("form").serialize();
    $.ajax({url : "guardar/guardarCarrera.php",type : "POST",data:formulario,
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
}
function ValidaSoloNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 57))
        event.returnValue = false;
}