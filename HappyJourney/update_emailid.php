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
	$new = $_POST['new_email'];
	$password = $_POST['password'];
	
	$sql = "UPDATE userinfo SET EmailId = '$new' WHERE Password = '$password'";
	
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