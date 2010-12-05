<html>
  <head>
    <link rel="stylesheet" type="text/css" href="http://visapi-gadgets.googlecode.com/svn/trunk/pilesofmoney/pom.css"/>
    <script type="text/javascript" src="http://visapi-gadgets.googlecode.com/svn/trunk/pilesofmoney/pom.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
  </head>
  <body>
    <div id="chartdiv"></div>
	<div id="pies"></div>
    <script type="text/javascript">
      google.load("visualization", "1");
      
      var chart;
	  $(document).ready(function(){
		$.ajax({
			url:'http://budget.opendatalondon.ca/index.php/api/budget/year/2010/format/jsonp',
			type:'GET',
			data:'callback=drawChart',
			dataType:'jsonp',
			success: drawChart
		});
	  });
	  var idmap = new Array;
	  var thebudget;
      function drawChart(budget) {
		thebudget = budget;
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Label');
        data.addColumn('number', 'Value');
        data.addRows(budget.__count__);
		var c=0;
		$.each(budget, function(i, org){
			data.setCell(c, 0, org['name']);
			data.setCell(c, 1, org['total_approved'], "$"+addCommas(org['total_approved'])+".00");
			idmap.push(i);
			c++;
		});
        
        var chartDiv = document.getElementById('chartdiv');
        var options = {title: 'London Ontario City Budget'};
        chart = new PilesOfMoney(chartDiv);
        chart.draw(data, options);
        google.visualization.events.addListener(chart, 'select', handleSelect);
      }
	  function handleSelect(){/*
		i = chart.getSelection();
		orgid = idmap[i[0]['row']];
		var c = 0;
		
		$.each(thebudget[orgid]['budget_items'], function(ind, item){
			
			c++;
		});
	*/}
	  function addCommas(nStr){
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	}

    </script>
  </body>
</html>