<!DOCTYPE html>
<html>
<head>
	<title>Graph Chart Example</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
<canvas id="chart_0" height="100%" width="100%"></canvas>
</body>
</html>
<script type="text/javascript">
	var data = {
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  datasets: [{
    label: "Dataset #1",
    backgroundColor: "rgba(255,99,132,0.2)",
    borderColor: "rgba(255,99,132,1)",
    borderWidth: 2,
    hoverBackgroundColor: "rgba(255,99,132,0.4)",
    hoverBorderColor: "rgba(255,99,132,1)",
    data: [65, 59, 20, 81, 56, 55, 40],
  }]
};

var option = {
  responsive: false,
  scales: {
    yAxes: [{
      stacked: false,
      gridLines: {
        display: false,
        color: "rgba(255,99,132,0.2)"
      }
    }],
    xAxes: [{
      gridLines: {
        display: false
      }
    }]
  }
};

Chart.Bar('chart_0', {
  options: option,
  data: data
});

</script>