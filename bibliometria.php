<?php
include "plantilla/menu.php";
?>
    <html>
    <head>
        <title>My first chart using FusionCharts Suite XT</title>
        <script type="text/javascript" src="fusion/js/fusioncharts.js"></script>
        <script type="text/javascript" src="fusion/js/themes/fusioncharts.theme.carbon.js"></script>

        <script type="text/javascript" src="fusion/js/fusioncharts-jquery-plugin.js"></script>

        <script type="text/javascript">
            $(function () {
                alert(1);
                $("#chart-container").insertFusionCharts({
                    type: "pie3d",
                    width: "400",
                    height: "350",
                    dataFormat: "json",
                    dataSource: {
                        chart: {
                            caption: "Harry's SuperMart",
                            subCaption: "Top 5 stores in last month by revenue",
                            numberPrefix: "$",
                            theme: "carbon"
                        },
                        data: [{
                            label: "Bakersfield Central",
                            value: "880000"
                        }, {
                            label: "Garden Groove harbour",
                            value: "730000"
                        }, {
                            label: "Los Angeles Topanga",
                            value: "590000"
                        }, {
                            label: "Compton-Rancho Dom",
                            value: "520000"
                        }, {
                            label: "Daly City Serramonte",
                            value: "330000"
                        }]
                    }
                });
            });

        </script>
    </head>
    <body>
    <div id="chart-container">FusionCharts XT will load here!</div>
    </body>
    </html>


<?php
//include "plantilla/pie.php";
?>