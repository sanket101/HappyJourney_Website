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
session_start();
function phpSuccess($msg) {
    echo '<script type="text/javascript">alert("Booked Successful!");</script>';
}
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
die('Could not connect: ' . mysqli_error());
  }
$db = mysqli_select_db( $con,"flight_details");
$num = $_POST['flight'];
$cla = $_POST['class'];
$name = $_POST['name'];
$contact = $_POST['contact_no'];
$email = $_POST['email_id'];
$ticket = $contact.$name;
$user1 = $_SESSION['user'];

$sql="INSERT INTO passenger(name,contact_no,email_id,class,flight_num,ticket_no,user_assoc) VALUES('$name','$contact','$email','$cla',$num,'$ticket','$user1')";

 if (!mysqli_query($con,$sql))
 {
	die('Error1: ' . mysql_error());
 }
 else
 {
	$db2 = mysqli_select_db($con,'flightdetails');
	if($cla = 'Economy')
	{
		$sql2 = "UPDATE details SET Economy_Seats = Economy_Seats - 1 WHERE FlightNo = $num";
	}
	else if($cla = 'Premium')
	{
		$sql2 = "UPDATE details SET Premium_Seats = Premium_Seats - 1 WHERE FlightNo = $num";
	}
	else
	{
		$sql2 = "UPDATE details SET Business_Seats = Business_Seats - 1 WHERE FlightNo = $num";
	}
	if(!mysqli_query($con,$sql2))
	{
		die('Error: ' . mysql_error());
	}
	else
	{
		phpSuccess("");
	}
 }
	 header("refresh:0.5;url=user_loggedin.html");
 
?>

</body>
</html>

