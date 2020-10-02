<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
<input type="name" id="month">
<button onclick="hello()">chouse</button>
<canvas id="myChart"></canvas>
</body>
</html>
<script type="text/javascript">
var ctx = document.getElementById("myChart");
var a=[];

function hello(){
	var myChart;

	var n=document.getElementById('month').value;
	var mm=["April","May","June","July","August","September","October","November","December","january","february","March","April","May","June","July","August","September",,"january","february","March","April","May","June","July","August","September","October","November","December","january","february","March","April","May","June","July","August","September","October",]
	var month=["january","february","March","April","May","June","July","August","September","October","November","December"];
	
	for(i=0; i<n; i++){
		a[i]=month[i];
	}
myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: a,
    datasets: [
      {
        type: 'bar',
        label: 'member',
        backgroundColor: "rgba(255,99,132,0.2)",
        data: [0, 10, 25, 18, 37, 0],
      },
      {
        type: 'bar',
        label: 'male',
        data: [90,80,70,50,30],
      },
      {
        type: 'bar',
        label: 'female',
        data: [0, 10, 20,30,40, 0],
      },
      {
        type: 'line', 
        label: 'male',
        data: [25, 25, 25, 25, 25, 25],
        fill: false,
        borderWidth: 1,
        borderColor: '#f00',
        borderDash: [5,4],
        lineTension: 0,
        steppedLine: true
      }
    ]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }],  
      xAxes: [{
        
        ticks: {
          
        }
      }],
    }
  }
});
}

</script>