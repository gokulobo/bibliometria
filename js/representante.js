$(function () {
    comunidad();
    $('select').material_select();
});

function comunidad(){
    $.ajax({
        url : "listar/listarComunidad.php",
        type : "POST",
        success : function(resp) {
            $("#id_comunidad").html(resp);
        }

    });
}


function guardar() {
    var formulario = $("form").serialize();
    //alert(formulario);
    $.ajax({
        url: "guardar/guardarRepresentante.php", type: "POST", data: formulario,
        success: function (resp) {
            alert(resp);
            $('form').each(function () {
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

function buscar() {
    cedula = $("#cedula").val();
    if (cedula == "") {
        var cedula = $("#cedula").val();
        alert("Debe ingresar un cedula");
        return false;
    }
    $.ajax({
        url: "buscar/buscarrepresentanteEdita.php",
        type: "POST",
        data: "cedula=" + cedula,
        dataType: "json",
        success: function (json) {
            if (json['respuesta'] == "si") {
                $("#nacionalidad").val(json.nacionalidad);
                $("#nombre").focus();
                $("#nombre").val(json.nombre);
                $("#apellido").focus();
                $("#apellido").val(json.apellido);
                $("#correo").focus();
                $("#correo").val(json.correo);
                $("#cargo_rol").focus();
                $("#cargo_rol").val(json.cargo_rol);


                $("#telefono_hab").focus();
                $("#telefono_hab").val(json.telefono_hab);
                $("#telefono_cel").focus();
                $("#telefono_cel").val(json.telefono_cel);
                $("#direccion").focus();
                $("#direccion").val(json.direccion);
                $("#id_comunidad").val(json.id_comunidad);
                $("#id_representante").val(json.id_representante);
            } else {
                $('form').each(function () {
                    this.reset();
                });
                $("#id_representante").val(0);
                $("#cedula").val(cedula);

            }
        }
    });
}