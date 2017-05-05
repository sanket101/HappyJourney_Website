<?php
	if(isset($_POST['submit']))
	{
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$to = "sanketgiri48@gmail.com";
		$headers = "From: $fname<$email>";
		$message = "First Name:$fname\n\n Last name:$lname\n\n E-mail:$email\n\n Subject:$subject\n\n";
		if(mail($to,$subject,$message,$headers))
		{
			echo "Successfully submitted";
		}
		else
		{
			echo "Error";
		}
	}
?>