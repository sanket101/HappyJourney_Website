<?php
	function phpSuccess($msg) {
    echo '<script type="text/javascript">alert("Flight Rates Change Successfully!");</script>';
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
	$flight_num = $_POST['flightid'];
	$class = $_POST['class'];
	$updated_cost = $_POST['newcost'];

	if($class="Economy")
	{
		$sql = "UPDATE details SET Economy_Price = '$updated_cost' WHERE FlightNo = '$flight_num'";
	}
	else if($class="Business")
	{
		$sql = "UPDATE details SET Business_Price = '$updated_cost' WHERE FlightNo = '$flight_num'";
	}
	else
    {
    	$sql = "UPDATE details SET Premium_Price = '$updated_cost' WHERE FlightNo = '$flight_num'";
    }
	if(!mysqli_query($database,$sql))
	{
		echo 'Not Updated';
	}
	else
	{
		phpSuccess("");
	}
	header("refresh:0.5;url=admin.html");
?>