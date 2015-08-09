$(function () {

});

function guardar(){
    var formulario = $("form").serialize();
    //alert(formulario);
    $.ajax({url : "guardarComunidad.php",type : "POST",data:formulario,
        success : function(resp) {
            alert(resp);
            document.getElementById("form1").reset();
        }
    });
    return false;

}
