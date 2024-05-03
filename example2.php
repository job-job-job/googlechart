<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
            var data = new google.visualization.DataTable();
                                	
	    data.addColumn('string', 'Element');
            data.addColumn('number', 'Percentage');
            data.addRows([['Nitrogen', 0.78], ['Oxygen', 0.21], ['Other', 0.01]]);

	    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, null);
        }
    </script>
</head>

<body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
</body>
</html>