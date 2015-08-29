$(function () {

    $('select').material_select();
    $.ajax({
        url: "listar/listaCarreras.php", type: "POST",
        success: function (resp) {
            $("#id_carrera").html(resp);
        }
    });
    $.ajax({
        url: "listar/listaCohorte.php",
        type: "POST",
        success: function (resp) {
            $("#cohorte").html(resp);
        }
    });

});

function modificar() {
    var id_carrera = $("#id_carrera").val();
    var cohorte = $("#cohorte").val();
    var tra = $("#trayecto").val();
    var tri = $("#trimestre").val();
    if (id_carrera == "seleccione carrera" || cohorte == "seleccione cohorte" || tra == "0" || tri == "0") {
        alert("Debe Seleccionar todos los campos");
        return false
    }
    $.ajax({
        url: "guardar/modificarTrayecto.php",
        type: "POST",
        data: "id_carrera=" + id_carrera + "&id_cohorte=" + cohorte+"&tri="+tri+"&tra="+tra,
        success: function (resp) {
            $("#reporte").html(resp);
        }
    });


}