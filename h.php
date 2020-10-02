<!DOCTYPE html>
<html>
<head>
	<title>Graph Chart Example 2</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  <!-- <script type="text/javascript" src="Chart.js"></script> -->
</head>
<body>
<div class="chart-container">
    <canvas id="myChart"></canvas>
</div>
</body>
</html>
<script type="text/javascript">



// stacked bar with 2 unstacked lines - nope
var barChartData = {
  labels: ['2016', '2017', '2018', '2019'],
  datasets: [{
    type: 'bar',
    label: 'a',
    id: "y-axis-0",
    backgroundColor: "rgba(217,83,79,0.75)",
    data: [1000, 2000, 4000, 5000]
  }, {
    type: 'bar',
    label: 'b',
    id: "y-axis-0",
    backgroundColor: "rgba(92,184,92,0.75)",
    data: [500, 600, 700, 800]
  }, {
    type: 'line',
    label: 'c',
    id: "y-axis-0",
    backgroundColor: "rgba(51,51,51,0.5)",
    data: [1500, 2600, 4700, 5800]
  }, {
    type: 'line',
    label: 'd',
    id: "y-axis-1",
    backgroundColor: "rgba(151,187,205,0.5)",
    data: [5000, 3000, 1000, 0]
  }]
};


var ctx = document.getElementById("myChart");
// allocate and initialize a chart
var ch = new Chart(ctx, {
  type: 'bar',
  data: barChartData,
  options: {
    title: {
      display: true,
      text: "Chart.js Bar Chart - Stacked"
    },
    tooltips: {
      mode: 'label'
    },
    responsive: true,
    scales: {
      xAxes: [{
        stacked: true
      }],
      yAxes: [{
        stacked: true,
        position: "left",
        id: "y-axis-0",
      }, {
        stacked: false,
        position: "right",
        id: "y-axis-1",
      }]
    }
  }
});



</script>