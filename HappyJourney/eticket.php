<?php
	$database = mysqli_connect('localhost','root','');
	if(!$database)
	{
		die('Not Connected:'.mysqli_error());
	}
	$db_selected = mysqli_select_db($database,'flight_details');
	if(!$db_selected)
	{
		die('Cant connect:'.mysqli_error());
	}
	$ticketnum = $_POST['ticketno'];

	$sql_db = "SELECT * FROM passenger WHERE ticket_no = '$ticketnum'";
	$records = mysqli_query($database,$sql_db);
	
?>
<html>
<body>
	<fieldset>
	<legend><h1>E-Ticket</h1></legend>
	<?php
		$server=mysqli_fetch_assoc($records);
		echo "Name:".$server['name']."<br>";
		echo "Contact No.:".$server['contact_no']."<br>";
		echo "Flight No.:".$server['flight_num']."<br>";
		echo "Class:".$server['class']."<br>";
		echo "Ticket No.".$server['ticket_no']."<br>";
	?>
    </fieldset>	
</body>	
</html>
