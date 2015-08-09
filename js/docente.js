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


});

function guardar(){
    var formulario = $("#frmDocente").serialize();
    $.ajax({
        url : "guardar/guardarDocente.php",
        type : "POST",
        data:formulario,
        success : function(resp) {
            alert(resp);
            document.getElementById("form1").reset();
        }
    });
    alert(formulario);
    return false;
}

function buscar(){

    var cedula = $("#cedula").val();
    if(cedula == "") {
        alert("Debe ingresar una cedula");
        return false;
    }
    $.ajax({url : "buscar/buscarDocenteEdita.php",
        type : "POST",
        data:"cedula="+cedula,
        dataType : "json",
        success : function(json) {
            //alert(json);
            if(json['respuesta']=="si"){
                $('ul.tabs').tabs('select_tab', 'laboral');
                $("#profesion").focus();
                $("#profesion").val(json.profesion);
                $("#categoria").val(json.categoria);
                $("#modalidad").val(json.modalidad);
                $("#dedicacion").val(json.dedicacion);
                $("#ascenso").focus();
                $("#ascenso").val(json.ascenso);
                $("#fecha_ingreso").val(json.fecha_ingreso);
                $("#investigacion").focus();
                $("#investigacion").val(json.investigacion);
                $("#cargo").focus();
                $("#cargo").val(json.cargo);
                $("#observaciones").focus();
                $("#observaciones").val(json.observaciones);
                //$("#guia").focus();
                //$("#guia").val(json.guia);
                //$("#coordinador").focus();
                //$("#coordinador").val(json.coordinador);

                $('ul.tabs').tabs('select_tab', 'basico');
                $("#nombre").focus();
                $("#nombre").val(json.nombre);
                $("#apellido").focus();
                $("#apellido").val(json.apellido);
                $("#direccion").focus();
                $("#direccion").val(json.direccion_hab);
                $("#lugar_nac").focus();
                $("#lugar_nac").val(json.lugar_nac);
                $("#telefono_hab").focus();
                $("#telefono_hab").val(json.telefono_hab);
                $("#telefono_cel").focus();
                $("#telefono_cel").val(json.telefono_cel);
                $("#id_docente").val(json.id_docente);
                $("#correo").focus();
                $("#correo").val(json.correo);
                $("#fecha_nac").val(json.fecha_nac);
                $("#nacionalidad").val(json.nacionalidad);
            }

        }
    });

   }

function ValidaSoloNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 57))
        event.returnValue = false;
}