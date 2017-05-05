
<html>
<head>
<style>
body {
    padding: 0;
    margin: 0;
    font-family: Arial;
    font-size: 17px;
}
#heading
{
	position:absolute;
	font-size:30px;
	margin-top:-1%;
	margin-left:8%;
	color:white;
}
span
{
	color:#ee00ee;
}
#nav {
    background-color: #3F053F;
}
#nav_wrapper {
    width:100%;
    margin: 0 auto;
	text-align:right;
	height:120px;
}
#nav ul {
    list-style-type:none;
    padding: 0;
    margin: 0;
    position: relative;
    min-width: 200px;
	font-size:18px;
	margin-right:30px;
}
#nav ul li {
    display: inline-block;
	margin-top:30px;
}
#nav ul li a:hover {
   color: #ee00e3;
}
#nav ul li a{
	color:#ffffff;
    display: block;
    padding: 20px;
    text-decoration: none;
}
#nav ul li:hover ul {
    display: block;
}
#nav ul ul {
    display: none;
    position: absolute;
    background-color: #3F053F;
    border-top: 0;
    margin-left: -5px;
}
#nav ul ul li {
    display: block;
	text-align:center;
}
#nav ul ul li a:hover {
    color: #ee00e3;
}
#nav ul ul li a
{
	padding:0px;
}
input[type=text],input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}

input[type=submit] {
    background-color: #045ACA;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<div id="nav">
	<div id="heading">
	<h1>HappyJourney</h1>
	</div>
    <div id="nav_wrapper">
		<ul>
            <li><a href="happy_journey.php">Home</a>
            </li>
            <li> <a href="flight.html">Flights</a>
            </li>
            <li> <a href="aboutus.html">About Us</a>
            </li>
            <li> <a href="contact.html">Contact Us</a>
        </ul>
    </div>
    <!-- Nav wrapper end -->
</div>
<!-- Nav end -->

</body>
</html>

<?php
	$dbc = mysqli_connect('localhost','root','');
	if(!$dbc)
	{
		die('Not Connected:'.mysqli_error());
	}
	$db_selected = mysqli_select_db($dbc,'flightdetails');
	if(!$db_selected)
	{
		die('Cant connect:'.mysqli_error());
	}
	$Fros = $_POST['From'];
	$T = $_POST['To'];
	$Date = $_POST['Date'];
	$Class= $_POST['Class'];
	if($Class = 'Economy')
	{
		$sql ="SELECT * FROM details WHERE (From_city='$Fros') AND (To_city='$T') AND (Date='$Date') AND (Economy_Seats > 0)";
	}
	else if($Class = 'Premium')
	{
		$sql ="SELECT * FROM details WHERE (From_city='$Fros') AND (To_city='$T') AND (Date='$Date') AND (Premium_Seats > 0)";
	}
	else
	{
		$sql ="SELECT * FROM details WHERE (From_city='$Fros') AND (To_city='$T') AND (Date='$Date') AND (Business_Seats > 0)";
	}
	$records = mysqli_query($dbc,$sql);
?>
<html>
<body style="background-color:lightyellow;">
	<h1 style="text-align:center;">Flights Available</h1>
	<table width="100%" border="1" cellspacing="1" cellpadding="10" style="text-align:center;">
		<tr>
			<th>Company</th>
			<th>From</th>
			<th>To</th>
			<th>Date</th>
			<th>Duration</th>
			<th>Departure</th>
			<th>Arrival</th>
			<th>Price</th>
			<th>Flight No.</th>
			<th>Booking</th>
		</tr>
	<?php
	if(!$records)
	{
		echo 'Not Deleted';
	}	
	if($Class="Economy")
	{
		while($student= mysqli_fetch_assoc($records))
			{
					echo "<tr>";
					echo "<td>".$student['Company']."</td>";
					echo "<td>".$student['From_city']."</td>";
					echo "<td>".$student['To_city']."</td>";
					echo "<td>".$student['Date']."</td>";
					echo "<td>".$student['Duration']."</td>";
					echo "<td>".$student['Departure']."</td>";
					echo "<td>".$student['Arrival']."</td>";
					echo "<td>".$student['Economy_Price']."</td>";
					echo "<td>".$student['FlightNo']."</td>";
					echo "<td><a href='book.html'>Book</a></td>";
					echo "</tr>";
			}
	}
	else if($Class="Premium")
	{
		while($student= mysqli_fetch_assoc($records))
			{
					echo "<tr>";
					echo "<td>".$student['Company']."</td>";
					echo "<td>".$student['From_city']."</td>";
					echo "<td>".$student['To_city']."</td>";
					echo "<td>".$student['Date']."</td>";
					echo "<td>".$student['Duration']."</td>";
					echo "<td>".$student['Departure']."</td>";
					echo "<td>".$student['Arrival']."</td>";
					echo "<td>".$student['Premium_Price']."</td>";
					echo "<td>".$student['FlightNo']."</td>";
					echo "<td><a href='book.html'>Book</a></td>";
					echo "</tr>";
				
			}
	}
	else
	{
		while($student= mysqli_fetch_assoc($records))
			{
					echo "<tr>";
					echo "<td>".$student['Company']."</td>";
					echo "<td>".$student['From_city']."</td>";
					echo "<td>".$student['To_city']."</td>";
					echo "<td>".$student['Date']."</td>";
					echo "<td>".$student['Duration']."</td>";
					echo "<td>".$student['Departure']."</td>";
					echo "<td>".$student['Arrival']."</td>";
					echo "<td>".$student['Business_Price']."</td>";
					echo "<td>".$student['FlightNo']."</td>";
					echo "<td><a href='book.html'>Book</a></td>";
					echo "</tr>";
				
			}
	}
	
	//header("refresh:10;url=happy_journey.php");
?>
</table>
</body>
</html>