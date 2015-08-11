$(function () {
    $('select').material_select();
});

function guardar(){
    var formulario = $("form").serialize();
    $.ajax({
        url : "guardar/guardarVenezuela.php",
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
}

function guardar(){
    var formulario = $("form1").serialize();
    $.ajax({
        url : "guardar/guardarVenezuela.php",
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
}
function guardar(){
    var formulario = $("form2").serialize();
    $.ajax({
        url : "guardar/guardarVenezuela.php",
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
}