$(function () {

    $('select').material_select();
    $.ajax({url : "listar/listaCarreras.php",type : "POST",
        success : function(resp) {
            $("#id_carrera").html(resp);
        }
    });
    $.ajax({
        url : "listar/listaCohorte.php",
        type : "POST",
        success : function(resp) {
            $("#cohorte").html(resp);
        }
    });
});

function buscar(){
    var id_carrera = $("#id_carrera").val();
    var cohorte = $("#cohorte").val();
    var tri = $("#trimestre").val();
    var tra = $("#trayecto").val();
    var tcohorte = $("#cohorte option:selected").text();

    if(id_carrera == "seleccione carrera" || cohorte == "seleccione cohorte" || tri == "0" || tra == "0"){
        alert("Debe Seleccionar todos los campos");
        return false
    }

    $.ajax({url : "reportes/reporte1.php",
        type : "POST",
        data:"id_carrera="+id_carrera+"&id_cohorte="+cohorte+"&tcohorte="+tcohorte+"&tra="+tra+"&tri="+tri,
        success : function(resp) {
            //alert(resp);
            $("#reporte").html(resp);
        }
    });

}