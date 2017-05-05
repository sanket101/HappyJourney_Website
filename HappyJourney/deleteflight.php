<?php
function phpSuccess($msg) {
    echo '<script type="text/javascript">alert("Flight Deleted Successfully!");</script>';
}
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
	$flightnum = $_POST['flightid'];
	
	$sql = "DELETE FROM details WHERE FlightNo = '$flightnum'";
	
	if(!mysqli_query($database,$sql))
	{
		die('Error: ' . mysql_error());
	}
	else
	{
		phpSuccess("");
	}
	header("refresh:0.5;url=admin.html");
?>