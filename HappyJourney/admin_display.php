<?php
	$database = mysqli_connect('localhost','root','');
	if(!$database)
	{
		die('Not Connected:'.mysqli_error());
	}
	$db_selected = mysqli_select_db($database,'flightdetails');
	if(!$db_selected)
	{
		die('Cant connect:'.mysqli_error());
	}
	$sql_db = "SELECT * FROM details";
	$records = mysqli_query($database,$sql_db);
	$f_id = $_POST['flightid'];
?>
<html>
<body>
	<p align="center">
	<h1>Flight Details</h1>
    </p>
	<table width="600" border="1" cellspacing="1" cellpadding="1">
		<tr>
			<th>Company</th>
			<th>From</th>
			<th>To</th>
			<th>Date</th>
			<th>Duration</th>
			<th>Departure</th>
			<th>Arrival</th>
			<th>Economy Price</th>
			<th>Premium Price</th>
			<th>Business Price</th>
			<th>Flight No.</th>
		</tr>
		<?php
			while($pass=mysqli_fetch_assoc($records))
			{
				if($f_id==$pass['FlightNo'])
				{

					echo "<tr>";
					echo "<td>".$pass['Company']."</td>";
					echo "<td>".$pass['From_city']."</td>";
					echo "<td>".$pass['To_city']."</td>";
					echo "<td>".$pass['Date']."</td>";
					echo "<td>".$pass['Duration']."</td>";
					echo "<td>".$pass['Departure']."</td>";
					echo "<td>".$pass['Arrival']."</td>";
					echo "<td>".$pass['Economy_Price']."</td>";
					echo "<td>".$pass['Premium_Price']."</td>";
					echo "<td>".$pass['Business_Price']."</td>";
					echo "<td>".$pass['FlightNo']."</td>";
					echo "</tr>";
				}	
			}
		?>
	</table>
	<a href="admin.html">Go back to main page</a>
</body>
</html>