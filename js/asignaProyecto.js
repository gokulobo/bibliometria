$(function () {
    $.ajax({url : "listar/listaProyectos.php",type : "POST",
        success : function(resp) {
            $("#id_proyecto").html(resp);
        }
    });
});

function buscar(){
    var cedula = $("#cedula").val();
    if(cedula == "") {
        alert("Debe ingresar una cedula");
        return false;
    }
    $.ajax({url : "buscar/buscarAlumnoEditar.php",type : "POST",data:"cedula="+cedula,dataType : "json",
        success : function(json) {
            var html = "<b>Nombre:</b>"+json.nombre+"<br><b>Apellido:</b>"+json.apellido+"<br><b>correo:</b>"+json.correo+"<br><b>telefono:</b>"+json.telefono_cel;
            $("#datos").html(html);
        }
    });
}