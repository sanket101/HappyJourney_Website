<?php
	$dbc = mysql_connect('localhost','root',' ');
	if(!$dbc)
	{
		die('Not Connected:'.mysql_error());
	}
	$db_selected = mysql_select_db('engineator',$dbc);
	if(!$db_selected)
	{
		die('Cant connect:'.mysql_error());
	}
	$query="UPDATE customers SET city ='Nagpur' where name='Bucky Roberts'";
	$result=mysql_query($query);
?>