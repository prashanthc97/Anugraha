<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Petrol Log</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="styles.css">
 	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body class="body-main">
<header class="site-header clearfix">
<h1>Vehicle statistics of Anugraha</h1>
<nav class="main-nav">
<nav>
	<ul>
		<li><a href="index.php"><span onmouseover="resize(this, '145%')" onmouseout="resize(this, '100%')">Home </span></a></li>
		<li><a href="jupiter.php"><span onmouseover="resize(this, '145%')" onmouseout="resize(this, '100%')">Jupiter</span></a></li>
		<li><a href="suzuki.php"><span onmouseover="resize(this, '145%')" onmouseout="resize(this, '100%')">Suzuki</span></a></li>
		<li><a href="activa.php"><span onmouseover="resize(this, '145%')" onmouseout="resize(this, '100%')">Activa</span></a></li>
	<script>
		function resize(elem, percent) 
		{ 
		elem.style.fontSize = percent;
		}
		</script>
	</ul>
</nav>
</header>

<main>
<section class="billboard">
		<h2>
			A detailed information guide for your Vehicle!!
		</h2>
		<p class="intro-text">
		This website offers you a deep understanding of your vehicle.
		</p>
		<p>The main features of this websites are
			<div class="intro-text2">
			<ul>
				<li>It can calculate a vehicle's health which includes keeping a record of the servicing dates.</li>
				<li>It helps in calculating the economic expenditure endured by the specific vehicle every month.</li>
				<li>It keeps track of the total distance covered by each vehicle.</li>
				<li>It calculates the mileage of each vehicle and gives out a combined statistics of all the vehicles.</li>
			</ul>
		</div>
		</p>
		</section>
		<  <div id="curve_chart" style="width: 900px; height: 500px"></div>

	<div class="column-wrapper clearfix">
	<aside class="sidebar-col">
		<h4>Mileage calculator</h4>
		<p>
			Please enter the following details
		</p>
		<form action="process.php" method="POST">
			Petrol filled<br><input type="text" name="Petrol">
			<input type="submit" value="submit" name="submit"><br>		
			Kms till now<br><input type="text" name="kms">
			<input type="submit" value="submit" name="submit">
			<br>
			Price Per Km<br><input type="text" name="price">
			<input type="submit" value="submit" name="submit">
		</form>
	</aside>
</div>
<div class="table-log">
	<h2>TABLES</h2>
	<p>Previous Log</p>
	<table border=".6px">
		<tr>
			<th>Kms</th><th>Amt</th><th>Lts</th><th>Mileage</th><th>Date filled</th>
		</tr>
	</table>
</div>
</main>

<footer id="footer" class="main-footer">
	
	<p class="copyright clearfix">
	Anugraha &copy;2017<br>since 2002
	</p>
</footer>
</body>
</html>