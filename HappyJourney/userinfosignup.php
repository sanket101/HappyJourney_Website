
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
    echo '<script type="text/javascript">alert("Sign-Up Successful!");</script>';
}
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("Username or Email-Id already exists!");</script>';
}
/*
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
die('Could not connect: ' . mysql_error());
  }
mysql_select_db("user", $con);
*/
$dbc = mysqli_connect('localhost','root','');
	if(!$dbc)
	{
		die('Not Connected:'.mysqli_error());
	}
	$db_selected = mysqli_select_db($dbc,'user');
	if(!$db_selected)
	{
		die('Cant connect:'.mysqli_error());
	}
$Use = $_POST['Username'];
$email = $_POST['EmailId'];
$checkUserID = mysqli_query($dbc,"SELECT Username from userinfo WHERE Username = '$Use'");

if (!$checkUserID) {
    die('Query failed to execute for some reason');
}

if (mysqli_num_rows($checkUserID) > 0) {
    phpAlert("User Id Already Exists") ;
    
}
else
{
	$checkUserID = mysqli_query($dbc,"SELECT EmailId from UserInfo WHERE EmailId = '$email'");
	if (!$checkUserID) {
   	 die('Query failed to execute for some reason');
	}
        
	if (mysqli_num_rows($checkUserID) > 0) {
    		 phpAlert("User Id Already Exists"); 
	}

	else
	{
		$sql="INSERT INTO userInfo (Username,Password,EmailId)
		VALUES('$_POST[Username]','$_POST[Password]','$_POST[EmailId]')";

	
	 if (!mysqli_query($dbc,$sql))
	 {
	  die('Error: ' . mysql_error());
	  }

	phpSuccess("");
	}
}
header("refresh:0.5;url=happy_journey.php");

?>


</body>
</html>
