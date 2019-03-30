<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.coba {
			height: 100vh !important;
			border: 1px solid red;
		}
		body{
			height: 100vh;
			width: 100%;
		}
	</style>
</head>

<body>
	<div class="container-fluid chart-container pl-3 pt-5" style="position: relative; height:40vh; width:80vw">
		<canvas id="myBarChart"></canvas>
		<button type="button" class="btn btn-outline-success" onclick="window.location='{{ url("sistel/sinyal") }}'">KEMBALI</button>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2/dist/Chart.min.js"></script>
	<script>
		var ctx = document.getElementById('myBarChart').getContext('2d');
		var data = {
			labels: [{{ $array }}],
			datasets: [{
				label: 'DATA SIGNAL ANALOG',
				data: [{{ $array }}],
				backgroundColor: [
					'rgba(35, 61, 77, 0.2)',
					'rgba(254, 127, 45, 0.2)',
					'rgba(252, 202, 70, 0.2)',
					'rgba(161, 193, 129, 0.2)',
					'rgba(87, 156, 135, 0.2)',
					'rgba(35, 61, 77, 0.2)',
					'rgba(254, 127, 45, 0.2)',
					'rgba(252, 202, 70, 0.2)',
					'rgba(161, 193, 129, 0.2)',
					'rgba(87, 156, 135, 0.2)',
					'rgba(35, 61, 77, 0.2)',
					'rgba(254, 127, 45, 0.2)',
					'rgba(252, 202, 70, 0.2)',
					'rgba(161, 193, 129, 0.2)',
					'rgba(87, 156, 135, 0.2)'
				],
				borderColor: [
					'rgba(35, 61, 77, 1)',
					'rgba(254, 127, 45, 1)',
					'rgba(252, 202, 70, 1)',
					'rgba(161, 193, 129, 1)',
					'rgba(87, 156, 135, 1)',
					'rgba(35, 61, 77, 1)',
					'rgba(254, 127, 45, 1)',
					'rgba(252, 202, 70, 1)',
					'rgba(161, 193, 129, 1)',
					'rgba(87, 156, 135, 1)',
					'rgba(35, 61, 77, 1)',
					'rgba(254, 127, 45, 1)',
					'rgba(252, 202, 70, 1)',
					'rgba(161, 193, 129, 1)',
					'rgba(87, 156, 135, 1)'
				],
				borderWidth: 1
			}, {
				label: "DATA SIGNAL DIGITAL",
				type: "line",
				fillColor: "rgba(161, 193, 129, 0.2)",
				strokeColor: "rgba(161, 193, 129, 1)",
				pointColor: "rgba(161, 193, 129, 1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(161, 193, 129, 1)",
				data: [{{$array}}]
			}]
		};
		var options = {
			scales: {
				xAxes: [{
					barPercentage: 0.5,
					barThickness: 6,
					maxBarThickness: 8,
					minBarLength: 2,
					gridLines: {
						offsetGridLines: true
					}
				}]
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		};
		var myBarChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: options
		});
	</script>
</body>

</html>