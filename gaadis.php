		<!DOCTYPE html>
<html>
      <title>Anugraha</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="normalize.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="styles.css">
          <head>
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
 

      <style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
        .w3-sidenav a,.w3-sidenav h4 {padding: 12px;}
        .w3-navbar li a {
            padding-top: 12px;
            padding-bottom: 12px;
        }
      </style>

      <body>

        <!-- Navbar -->
        <div class="w3-top">
          <ul class="w3-navbar w3-theme w3-top w3-left-align w3-large">
            <li class="w3-opennav w3-right w3-hide-large">
              <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            </li>
            <li><a href="#" class="w3-theme-l1">Anugraha</a></li>
            <li class="w3-hide-small"><a href="index.php" class="w3-hover-white">Home</a></li>
            <li class="w3-hide-small"><a href="Gaadis.php" class="w3-hover-white">Gaadis</a></li>
            <li class="w3-hide-small"><a href="Electricity.php" class="w3-hover-white">Electricity</a></li>
            <li class="w3-hide-small"><a href="Groceries.php" class="w3-hover-white">Groceries</a></li>
            <li class="w3-hide-small"><a href="Portfolios.php" class="w3-hover-white">Portfolios</a></li>
          </ul>
        </div>
          <h1 class="w3-text-teal">Chart</h1>

      <div id="curve_chart" style="width: 70%; height: 470px" class="chart-gaadi"></div>
    
    </div>
    <!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4><b>Menu</b></h4>
  <a href="#" class="w3-hover-black">Overview</a>
  <a href="#" class="w3-hover-black">My Activity</a>
  <a href="#" class="w3-hover-black">Tasks</a>
  <a href="#" class="w3-hover-black">Discussions</a>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px">
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      
    
    <div class="w3-third w3-container"></div>
  </div>
</div>

			<div class="column-wrapper clearfix">
			<aside class="sidebar-col">
				<h4>Mileage calculator</h4>
				<p>
					Please enter the following details
				</p>
				<form action="formpetrol.php" method="POST">
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
			<h4>Previous Log</h4>
			<table border=".9px">
				<tr>
					<th>Kms</th><th>Amt</th><th>Lts</th><th>Mileage</th><th>Date filled</th>
				</tr>
				<tr>
					<td>5689</td><td>200</td><td>2.89</td><td>39</td><td>31/01/17</td>
				</tr>
			</table>
		</div>
		<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
		</body>
		</html>