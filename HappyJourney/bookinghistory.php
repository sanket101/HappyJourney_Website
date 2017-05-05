<html>
<head>
<style>
body {
    background-color: lightyellow;
}
table {
    border-collapse: collapse;
    width: 80%;
}
table,th,td{
    border: 0.5px solid black;
}
td {
    text-align: center;
    padding: 10px;
}
th{
    padding: 10px;
    
}
tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<h1>The Ticket Details are - </h1>
<?php
session_start();
$query=mysqli_connect("localhost","root","");
mysqli_select_db($query,"flightdetails");
$user=$_SESSION['user'];
$query1=mysqli_query($query,"Select flight_num from passenger where user_assoc='$user'");
mysqli_select_db($query,"flight_details");
$user=$_SESSION['user'];
$query1=mysqli_query($query,"Select * from passenger where user_assoc='$user'");
if (false == $query1) {
    echo mysql_error();
}
echo "<table><tr><th>Flight Number</th><th>Ticket Number</th>";
while($query2=mysqli_fetch_array($query1))
{
echo "<tr><td>".$query2[ 'flight_num']."</td>";
echo "<td>".$query2['ticket_no']."</td></tr>";
}


echo "</table>";
?>
<a href="user_loggedin.html">Click here to go back to main page</a>
</body>
</html>
