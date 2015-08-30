$(function () {
    $('img[usemap]').rwdImageMaps();
    $("#merida").hide();
});

/*function estEstado() {
    $.ajax({url : "reportes/reporte3.php",type : "POST",dataType : "json",
        success : function(resp) {
            //alert(resp);
            $("#estadistica1").insertFusionCharts({
                type: "bar3d",
                width: "400",
                height: "800",
                dataFormat: "json",
                dataSource: {
                    chart: {
                        caption: "Proyectos",
                        subCaption: "Por Municipio",
                        numberPrefix: "",
                        theme: "carbon"
                    },
                    data: resp
                }
            });
        }
    });
}*/