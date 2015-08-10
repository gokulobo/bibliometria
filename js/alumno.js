$(function () {
    $('select').material_select();

    $('.datepicker').pickadate({
        labelMonthNext: 'Next month',
        labelMonthPrev: 'Previous month',
        labelMonthSelect: 'Select a month',
        labelYearSelect: 'Select a year',
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        weekdaysFull: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        weekdaysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        weekdaysLetter: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        today: 'Today',
        clear: 'Clear',
        close: 'Close',
        selectYears:20,
        selectMonths:true
    });
    $.ajax({url : "listaCarreras.php",type : "POST",
        success : function(resp) {
            $("#carrera").html(resp);
        }
    });
    $.ajax({url : "listaCohorte.php",type : "POST",
        success : function(resp) {
            $("#cohorte").html(resp);
        }
    });
});

function guardar(){
    var formulario = $("form").serialize();
    //alert(formulario);
    $.ajax({url : "guardar/guardarAlumno.php",type : "POST",data:formulario,
        success : function(resp) {
            alert(resp);

        }
    });
    return false;

}

function buscar(){
    var cedula = $("#cedula").val();
    if(cedula == "") {
        alert("Debe ingresar una cedula");
        return false;
    }
    $.ajax({url : "buscarAlumnoEditar.php",type : "POST",data:"cedula="+cedula,dataType : "json",
        success : function(json) {
            //alert(json);
            if(json['respuesta']=="si"){
                $("#nombre").val(json.nombre);
                $("#apellido").val(json.apellido);
                $("#fecha").val(json.fecha);
                $("#nacionalidad").val(json.nacionalidad);
                $("#cedula").val(json.cedula);
                $("#carnet").val(json.carnet);
                $("#grado_instruccion").val(json.grado_instruccion);
                $("#correo").val(json.correo);
                $("#direccion_hab").val(json.direccion_hab);
                $("#telefono_hab").val(json.telefono_hab);
                $("#telefono_cel").val(json.telefono_cel);
                $("#carrera").val(json.id_carrera);
                $("#cohorte").val(json.id_cohorte);
                $("#trayecto").val(json.trayecto);
                $("#trimestre").val(json.trimestre);
                $("#id_alumno").val(json.id_alumno);
            }

        }
    });
}