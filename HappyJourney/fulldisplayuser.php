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
	$sql_db = "SELECT * FROM userinfo";
	$records = mysqli_query($database,$sql_db);
?>
<html>
<head>
<style>

</style>
</head>	
<body>
	<h1>User Database</h1>
	<table width="600" border="1" cellspacing="1" cellpadding="1">
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>EmailId</th>
		</tr>
		<?php
			while($user=mysqli_fetch_assoc($records))
			{
				echo "<tr>";
				echo "<td>".$user['Username']."</td>";
				echo "<td>".$user['Password']."</td>";
				echo "<td>".$user['EmailId']."</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>