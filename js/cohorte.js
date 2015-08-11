$(function () {
    $('select').material_select();
});

function guardar(){
    var formulario = $("form").serialize();
    $.ajax({url : "guardar/guardarCohorte.php",type : "POST",data:formulario,
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