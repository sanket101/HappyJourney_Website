
<html>
<head>
<style>
body {
    background-color: lightyellow;
}
</style>
</head>
<body>
<?php
function phpSuccess($msg) {
    echo '<script type="text/javascript">alert("Flight Added Successful!");</script>';
}
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("Already exists!");</script>';
}
/*
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
die('Could not connect: ' . mysql_error());
  }
mysql_select_db("user", $con);
*/
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
$FlightNo = $_POST['FlightNo'];

$checkUserID = mysqli_query($dbc,"SELECT FlightNo from details WHERE FlightNo = $FlightNo");

if (!$checkUserID) {
    die('Query failed to execute for some reason');
}

if (mysqli_num_rows($checkUserID) > 0) {
    phpAlert("Flight Already Exists") ;
    
}
else
{
		$sql="INSERT INTO details (From_city,To_city,Date,Duration,Departure,Arrival,Economy_Price,Premium_Price,Business_Price,Economy_Seats,Premium_Seats,Business_Seats,Company,FlightNo)
		VALUES('$_POST[From]','$_POST[To]','$_POST[Date]','$_POST[Duration]','$_POST[Departure]','$_POST[Arrival]','$_POST[Economy_Price]','$_POST[Premium_Price]','$_POST[Business_Price]','$_POST[Economy_Seats]','$_POST[Premium_Seats]','$_POST[Business_Seats]','$_POST[Company]',$_POST[FlightNo])";
	 if (!mysqli_query($dbc,$sql))
	 {
	  die('Error: ' . mysql_error());
	  }

	phpSuccess("");
}
header("refresh:0.5;url=admin.html");

?>


</body>
</html>
