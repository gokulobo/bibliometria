function verificar(){
    var datos = $("#form1").serialize();
    $.ajax({
        url : "verificacion.php",
        type : "POST",
        data:datos,
        success : function(resp) {
            if(resp == "no"){
                $("#correo").val('');
                $("#clave").val('');
                alert("Datos Invalidos");
            }else{
                location.href="inicio.php";
            }
        }
    });
    return false;
}

$(".dropdown-button").dropdown();