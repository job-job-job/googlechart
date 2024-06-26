<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawSarahChart);
        google.charts.setOnLoadCallback(drawAnthonyChart);

        function drawSarahChart() {
            var data = new google.visualization.DataTable();
                                
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([['Mushrooms', 1], ['Onions', 1], ['Olives', 2], ['Zucchini', 2], ['Pepperoni', 1]]);

            var options = {title:'How Much Pizza Sarah Ate Last Night', width:400, height:300};

            var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
            chart.draw(data, options);
        }

   	function drawAnthonyChart() {
            var data = new google.visualization.DataTable();

            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([['Mushrooms', 2], ['Onions', 2], ['Olives', 2], ['Zucchini', 0], ['Pepperoni', 3]]);

	    var options = {title:'How Much Pizza Anthony Ate Last Night', width:400, height:300};

	    var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <table class="columns">
        <tr>
	    <td><div id="Sarah_chart_div" style="border: 1px solid #ccc"></div></td>
	    <td><div id="Anthony_chart_div" style="border: 1px solid #ccc"></div></td>
	</tr>
    </table>
</body>
</html>