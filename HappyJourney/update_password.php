<?php
	$database = mysqli_connect('localhost','root','');
	if(!$database)
	{
		die('Not Connected:'.mysql_error());
	}
	$db_selected = mysqli_select_db($database,'user');
	if(!$db_selected)
	{
		die('Cant connect:'.mysqli_error());
	}
	$current = $_POST['current_password'];
	$new = $_POST['new_password'];
	
	$sql = "UPDATE userinfo SET Password = '$new' WHERE Password = '$current'";
	
	if(!mysqli_query($database,$sql))
	{
		echo 'Not Updated';
	}
	else
	{
		echo 'Updated';
	}
	header("refresh:2;url=accountdetails.html");
?>