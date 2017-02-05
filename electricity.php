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
        		<div class="elec-col clearfix">
				<h4>Daily Electricity Log </h4>
				<p>
					Please enter the following details
				</p>
				<!--<form action="formelec.php" method="POST">
					Ground Floor meter reading<br><input type="text" name="ground">
					<input type="submit" value="submit" name="submit"><br>		
					First floor meter reading<br><input type="text" name="first">
					<input type="submit" value="submit" name="submit">
				<br>
				</form>
		-->
		<form action="C:\wamp\www\Dashboard\formelec.php" method="get">
Ground: <input type="text" name="ground"><br>
first: <input type="text" name="first"><br>
<input type="submit">
</form></div>
			<div class="elec-table">
			<h2>TABLES</h2>
			<h4>Monthly Log</h4>
			<h5>Meter No:13342</h5>
			<table border=".6px">
				<tr>
					<th>Bill date</th><th>No. of units</th><th>Amount</th><th>paid on</th>
				</tr>
				<tr>
					<td>4/1/17</td><td>80</td><td>560</td><td>26/1/17</td>
				</tr>
			</table><br>
			<h5>Meter No:13343</h5>
			<table border=".6px">
				<tr>
					<th>Bill date</th><th>No. of units</th><th>Amount</th><th>paid on</th>
				</tr>
				<tr>
					<td>4/1/17</td><td>90</td><td>360</td><td>26/1/17</td>
				</tr>
			</table><br>
		</div>
		</body>
		</html>