$(function () {
    $('img[usemap]').rwdImageMaps();
    $.ajax({url : "reportes/grafico1.php",type : "POST",dataType : "json",
        success : function(resp) {
            //alert(resp);
            $("#estadistica1").insertFusionCharts({
                type: "pie3d",
                width: "90%",
                height: "400",
                dataFormat: "json",
                dataSource: {
                    chart: {
                        caption: "Proyectos",
                        subCaption: "Por Municipio",
                        numberPrefix: "",
                        //theme: "carbon",
                        showlegend: "1",
                        showlabels: "1",
                    },
                    data: resp
                }
            });
        }
    });
    $.ajax({url : "reportes/grafico2.php",type : "POST",dataType : "json",
        success : function(resp) {
            //alert(resp);
            $("#estadistica2").insertFusionCharts({
                type: "pie2d",
                width: "90%",
                height: "400",
                dataFormat: "json",
                dataSource: {
                    chart: {
                        caption: "Proyectos",
                        subCaption: "Por Carrera",
                        numberPrefix: "",
                        //theme: "carbon",
                        showlegend: "1",
                        showlabels: "1",
                    },
                    data: resp
                }
            });
        }
    });
});

function buscar(id){
    if(id==0){
        alert("Debe Seleccionar todos los campos");
        return false
    }
    //alert(id);
    $("#respuesta").html('');
    $("#carreras").html('');
    $("#docentes").html('');
    $.ajax({url : "reportes/datosMunicipio.php",
        type : "POST",
        data:"id="+id,
        success : function(resp) {
            if(resp != 0){
                $("#respuesta").html(resp);
                carreras(id);
                docentes(id);

            }else{
                alert("No se encuentran proyectos registrados");
            }
            //alert(resp);

        }
    });
}

function carreras(id){
    $.ajax({url : "reportes/grafico3.php",type : "POST",dataType : "json",data:"id="+id,
        success : function(resp) {
            //alert(resp);
            $("#carreras").insertFusionCharts({
                type: "pie3d",
                width: "90%",
                height: "400",
                dataFormat: "json",
                dataSource: {
                    chart: {
                        caption: "Proyectos",
                        subCaption: "Por Carreras En Municipio",
                        numberPrefix: "",
                        //theme: "carbon",
                        showlegend: "1",
                        showlabels: "1",
                    },
                    data: resp
                }
            });
        }
    });
}

function docentes(id){
    $.ajax({url : "reportes/grafico4.php",type : "POST",dataType : "json",data:"id="+id,
        success : function(resp) {
            //alert(resp);
            $("#docentes").insertFusionCharts({
                type: "pie3d",
                width: "90%",
                height: "400",
                dataFormat: "json",
                dataSource: {
                    chart: {
                        caption: "Proyectos",
                        subCaption: "Por Tutor En Municipio",
                        numberPrefix: "",
                        //theme: "carbon",
                        showlegend: "1",
                        showlabels: "1",
                    },
                    data: resp
                }
            });
        }
    });
}
