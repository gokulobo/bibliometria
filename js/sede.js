function guardar(){
    var formulario = $("form").serialize();
    $.ajax({url : "guardarSede.php",type : "POST",data:formulario,
        success : function(resp) {
            alert(resp);
        }
    });
    return false;
}