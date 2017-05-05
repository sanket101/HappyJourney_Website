<?php
	$dbc = mysqli_connect('localhost','root','');
	$dbc1 = mysqli_connect('localhost','root','',true);
	if(!$dbc)
	{
		die('Not Connected:'.mysqli_error());
	}
	$db_selected = mysqli_select_db($dbc,'flight_details');
	if(!$db_selected)
	{
		die('Cant connect:'.mysqli_error());
	}
	$tick = $_POST['ticketno'];
	$f_id = $_POST['flightid'];

	$sql_db = "SELECT class FROM passenger WHERE ticket_no = '$tick'";
	$records = mysqli_query($dbc,$sql_db);
	$passen=mysqli_fetch_assoc($records);
	$passen_class=$passes['class'];
	
	$sql = "DELETE FROM passenger WHERE (ticket_no = '$tick') AND (flight_num = '$f_id')";
	
	if(!mysqli_query($dbc,$sql))
	{
		echo 'Not Cancelled';
	}
	else
	{
		echo 'Ticket has been Cancelled';
		$db_selected1 = mysqli_select_db($dbc1,'flightdetails');
		$sql_db1 = "SELECT * FROM details WHERE FlightNo = '$f_id'";
		$records1 = mysqli_query($dbc1,$sql_db1);
		$seat = 1;
		if($passen_class == 'Economy')
		{
			$sql_flight = "UPDATE details SET Economy_Seats = Economy_Seats + $seat WHERE FlightNo = '$f_id'";
		}
		if($passen_class == 'Premium')
		{
			$sql_flight = "UPDATE details SET Premium_Seats = Premium_Seats + $seat WHERE FlightNo = '$f_id'";
		}
		if($passen_class == 'Business')
		{
			$sql_flight = "UPDATE details SET Business_Seats = Business_Seats + $seat WHERE FlightNo = '$f_id'";
		}
		if(!mysqli_query($database,$sql_flight))
		{
			echo 'Flight database Not Updated';
		}
		else
		{
			echo 'Flight database Updated';
		}
	}
	header("refresh:2;url=user_loggedin.html");
?>