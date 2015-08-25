$(function () {

    $("#popupWindow").jqxWindow({
        width: 350,
        resizable: false,
        isModal: true,
        autoOpen: false,
        cancelButton: $("#Cancel"),
        modalOpacity: 0.01
    });

    $("#popupWindow").on('open', function () {
        $("#nombre").jqxInput('selectAll');
    });

    $("#Cancel").jqxButton({theme: theme});
    $("#Save").jqxButton({theme: theme});

    // update the edited row when the user clicks the 'Save' button.
    $("#Save").click(function () {
        alert(1);
        if (editrow >= 0) {
            var row = {
                id_docente: $("#id_docente").val(),
                nombre: $("#nombre").val(),
                apellido: $("#apellido").val(),
                cedula: $("#cedulag").val()
            };
            var rowID = $('#jqxgrid').jqxGrid('getrowid', editrow);
            $('#jqxgrid').jqxGrid('updaterow', rowID, row);
            $("#popupWindow").jqxWindow('hide');
        }
    });
    $("#popupWindow").jqxWindow('hide');
    var source =
    {
        datatype: "json",
        datafields: [
            {name: 'id_docente'},
            {name: 'nombre'},
            {name: 'apellido'},
            {name: 'cedula'},
        ],
        url: 'reportes/docente.php',
        cache: false
    };
    $("#id_docente").jqxInput({theme: theme});
    $("#nombre").jqxInput({theme: theme});
    $("#apellido").jqxInput({theme: theme});
    $("#cedulag").jqxInput({theme: theme});

    $("#nombre").width(150);
    $("#apellido").height(23);


    var dataAdapter = new $.jqx.dataAdapter(source);
    var editrow = -1;
    $("#jqxgrid").jqxGrid(
        {
            source: source,
            pageable: true,
            sortable: true,
            altrows: true,
            enabletooltips: true,
            showfilterrow: true,
            filterable: true,
            localization: getLocalization('en'),
            //editable: true,
            autoheight: true,
            columns: [
                {text: 'Codigo', datafield: 'id_docente', width: 250},
                {text: 'Cedula', datafield: 'cedula', width: 180},
                {text: 'Nombre', datafield: 'nombre', width: 150},
                {text: 'Apellido', datafield: 'apellido', width: 180},
                {
                    text: 'Editar', datafield: 'Edit',
                    width:60,
                    columntype: 'button', cellsrenderer: function () {
                    return "Editar";
                },
                    buttonclick: function (row) {
                        // open the popup window when the user clicks a button.
                        editrow = row;
                        var offset = $("#jqxgrid").offset();
                        $("#popupWindow").jqxWindow({
                            position: {
                                x: parseInt(offset.left) + 60,
                                y: parseInt(offset.top) + 60
                            }
                        });

                        // get the clicked row's data and initialize the input fields.
                        var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', editrow);
                        $("#id_docente").val(dataRecord.id_docente);
                        $("#nombre").val(dataRecord.nombre);
                        $("#apellido").val(dataRecord.apellido);
                        $("#cedulag").val(dataRecord.cedula);
                        // show the popup window.
                        $("#popupWindow").jqxWindow('open');
                    }
                }
            ]
        });
});

function buscar(){
    var cedula = $("#cedula").val();
    if(cedula == "") {
        alert("Debe ingresar una cedula");
        return false;
    }
    alert(1);
    $.ajax({url : "buscar/buscarDocenteGeneral.php",type : "POST",data:"cedula="+cedula,
        success : function(respuesta) {
            $("#resultado").html(respuesta);
        }
    });

}