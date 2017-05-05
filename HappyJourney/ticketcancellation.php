<?php
	$dbc = mysqli_connect('localhost','root','');
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
	$passen_class =$_POST['cla'];
	$sql = "DELETE FROM passenger WHERE (ticket_no = '$tick') AND (flight_num = '$f_id')";
	
	if(!mysqli_query($dbc,$sql))
	{
		echo 'Not Cancelled';
	}
	else
	{
		echo 'Ticket has been Cancelled'.'<br>';
		$db_selected1 = mysqli_select_db($dbc,'flightdetails');
		if($passen_class = 'Economy')
		{
			$sql_flight = "UPDATE details SET Economy_Seats = Economy_Seats + 1 WHERE FlightNo = '$f_id'";
		}
		else if($passen_class = 'Premium')
		{
			$sql_flight = "UPDATE details SET Premium_Seats = Premium_Seats + 1 WHERE FlightNo = '$f_id'";
		}
		else
		{
			$sql_flight = "UPDATE details SET Business_Seats = Business_Seats + 1 WHERE FlightNo = '$f_id'";
		}
		if(!mysqli_query($dbc,$sql_flight))
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