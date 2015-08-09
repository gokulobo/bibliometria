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

                $("#nacionalidad option[value='"+json.nacionalidad+"']").attr("selected",true);
                $("#nombre").focus();
                $("#nombre").val(json.nombre);
                $("#categoria").focus();
                $("#categoria").val(json.categoria);
                $("#apellido").focus();
                $("#apellido").val(json.apellido);
                $("#modalidad").focus();
                $("#modalidad").val(json.modalidad);
                $("#dedicacion").focus();
                $("#dedicacion").val(json.dedicacion);
                $("#direccion").focus();
                $("#direccion").val(json.direccion_hab);
                $("#ascenso").focus();
                $("#ascenso").val(json.ascenso);
                $("#fecha_nac").focus();
                $("#fecha_nac").val(json.fecha_nac);
                $("#lugar_nac").focus();
                $("#lugar_nac").val(json.lugar_nac);
                $("#fecha_ingreso").focus();
                $("#fecha_ingreso").val(json.fecha_ingreso);
                $("#profesion").focus();
                $("#profesion").val(json.profesion);
                $("#investigacion").focus();
                $("#investigacion").val(json.investigacion);
                $("#cargo").focus();
                $("#cargo").val(json.cargo);
                $("#correo").focus();
                $("#correo").val(json.correo);
                $("#telefono_hab").focus();
                $("#telefono_hab").val(json.telefono_hab);
                $("#telefono_cel").focus();
                $("#telefono_cel").val(json.telefono_cel);
                $("#guia").focus();
                $("#guia").val(json.guia);
                $("#coordinador").focus();
                $("#coordinador").val(json.coordinador);
                $("#observaciones").focus();
                $("#observaciones").val(json.observaciones)
                $("#clave_usuario").focus();
                $("#clave_usuario").val(json.clave_usuario);
                $("#id_docente").focus();
                $("#id_docente").val(json.id_docente);
            }

        }
    });

   }

function ValidaSoloNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 57))
        event.returnValue = false;
}