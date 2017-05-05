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
    echo '<script type="text/javascript">alert("Booked Successful!");</script>';
}
$con = mysql_connect("localhost","root","");
if (!$con)
  {
die('Could not connect: ' . mysql_error());
  }
mysql_select_db("flightdetails", $con);
$num = $_POST['FlightNo'];
$cla = $_POST['class'];
mysql_select_db("flight_details", $con);
$name = $_POST['name'];
$contact = $_POST['contact_no'];
$email = $_POST['email_id'];
$ticket = $num.$name;
$sql="INSERT INTO passenger (name,contact_no,email_id,class,flight_num,ticket_no)
	VALUES('$id','$name','$contact','$email','$cla','$num','$ticket')";

 if (!mysql_query($sql,$con))
 {
  die('Error: ' . mysql_error());
  }
else
{
   $db2 = mysql_connect("localhost","root","",true);
   mysql_select_db("flightdetails", $db2);
   if($cla="Economy")
   {
   		$sql = "UPDATE details SET Economy_Seats = Economy_seats-1 WHERE FlightNo = '$num'";
   }
   else if($cla="Business")
   {
   	    $sql = "UPDATE details SET Business_Seats = Business_seats-1 WHERE FlightNo = '$num'";
   }
   else
   {
   	    $sql = "UPDATE details SET Premium_Seats = Premium_seats-1 WHERE FlightNo = '$num'";
   }
   phpSuccess("");
}
header("refresh:1;url=happy_journey.html");

?>

</body>
</html>

