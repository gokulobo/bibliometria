$(function () {
    $('select').material_select();
    estados();
});

function guardar(){
    var formulario = $("form").serialize();
    //alert(formulario);
    $.ajax({url : "guardar/guardarComunidad.php",type : "POST",data:formulario,
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

function buscaMunicipio(muni,parro){
    var estado = $("#estado").val();
    $.ajax({
        url : "listar/listarMunicipio.php",
        data: "estado="+estado,
        type : "POST",
        success : function(resp) {
            $("#municipio").html(resp);
            if(muni != undefined) {
                $("#municipio").val(muni);
                buscaParroquia(parro);
            }
        }

    });
}

function buscaParroquia(parro){
    var municipio = $("#municipio").val();
    $.ajax({
        url : "listar/listarParroquia.php",
        data: "municipio="+municipio,
        type : "POST",
        success : function(resp) {
            $("#parroquia").html(resp);
            if(parro != undefined) $("#parroquia").val(parro);
        }

    });
}

function estados(){
    $.ajax({
        url : "listar/listarEstado.php",
        type : "POST",
        success : function(resp) {
            $("#estado").html(resp);
            $("#estadoP").html(resp);
        }

    });
}

function buscar() {
    var rif = $("#rif").val();
    if (rif == "") {
        alert("Debe ingresar un rif");
        return false;
    }
    $.ajax({
        url: "buscar/buscarComunidadEdita.php",
        type: "POST",
        data: "rif=" + rif,
        dataType: "json",
        success: function (json) {
            if (json['respuesta'] == "si") {
                $("#nombre").focus();
                $("#nombre").val(json.nombre_comunidad);
                $("#correo").focus();
                $("#correo").val(json.correo);
                $("#estado").val(json.estado);
                $("#estado").focus();
                buscaMunicipio(json.municipio,json.parroquia);
                $("#telefono_hab").focus();
                $("#telefono_hab").val(json.telefono_hab);
                $("#telefono_cel").focus();
                $("#telefono_cel").val(json.telefono_cel);
                $("#direccion").focus();
                $("#direccion").val(json.direccion);
                $("#convenio").val(json.direccion);
                $("#convenio").focus();
                $("#id_comunidad").val(json.convenio);
            } else {
                $('form').each(function () {
                    this.reset();
                });
                $("#id_comunidad").val(0);


            }
        }
    });
}