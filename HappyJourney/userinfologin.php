
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
    echo '<script type="text/javascript">alert("Login Successful!");</script>';
}
function phpAlert($msg) {
    echo '<script type="text/javascript">alert(" Check Username or Password!");</script>';
}
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
$pass = $_POST['Password'];
$checkUserID = mysqli_query($dbc,"SELECT username from userinfo WHERE Username = '$Use'");

if (!$checkUserID) {
    die('Query failed to execute for some reason');
}

if (mysqli_num_rows($checkUserID) <= 0) {
    phpAlert("") ;
    header("refresh:0.5;url=happy_journey.php");
}
else
{
	$checkUserID = mysqli_query($dbc,"SELECT Password from userInfo WHERE Password = '$pass'");
	if (!$checkUserID) {
   	 die('Query failed to execute for some reason');
	}
        
	if (mysqli_num_rows($checkUserID) <= 0) {
    		 phpAlert(""); 
			header("refresh:0.5;url=happy_journey.php");
	}

	else
	{
		$_SESSION['user']=$Use;
		if(strcmp($Use,"admin")==0 && strcmp($pass,"admin@123")==0)
		{
			phpSuccess("");
			header("refresh:0.5;url=admin.html");
		}
		else
		{
			phpSuccess("");
			header("refresh:0.5;url=user_loggedin.html");
		}
	}
}

?>


</body>
</html>
