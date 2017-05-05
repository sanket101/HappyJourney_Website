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
<h1>The Database Entries are - </h1>
<?php
    $dbc = mysqli_connect('localhost','root','');
    if(!$dbc)
    {
        die('Not Connected:'.mysql_error());
    }
    $db_selected = mysqli_select_db($dbc,'flightdetails');
    if(!$db_selected)
    {
        die('Cant connect:'.mysqli_error());
    }
    $From = $_POST['From'];
	 $To = $_POST['To'];
	$query1=mysqli_query($dbc,"Select * from details WHERE From_city = '$From' OR To_city = '$To'");
if (false === $query1) {
    echo mysqli_error();
}
echo "<table><tr><th>From_city</th><th>To_city</th><th>Date</th><th>Duration</th><th>Arrival</th><th>Economy_Price</th><th>Premium_Price</th><th>Business_Price</th><th>Economy_Seats</th><th>Premium_Seats</th><th>Busines_Seats</th><th>Company</th><th>FlightNo</th>";
while($query2=mysqli_fetch_array($query1))
{
echo "<tr><td>".$query2[ 'From_city']."</td>";
echo "<td>".$query2['To_city']."</td>";
echo "<td>".$query2['Date']."</td>";
echo "<td>".$query2['Duration']."</td>";
echo "<td>".$query2['Arrival']."</td>";
echo "<td>".$query2['Economy_Price']."</td>";
echo "<td>".$query2['Premium_Price']."</td>";
echo "<td>".$query2['Business_Price']."</td>";
echo "<td>".$query2['Economy_Seats']."</td>";
echo "<td>".$query2['Premium_Seats']."</td>";
echo "<td>".$query2['Business_Seats']."</td>";
echo "<td>".$query2['Company']."</td>";
echo "<td>".$query2['FlightNo']."</td></tr>";
}


echo "</table>";
?>
<a href="admin.html">Click here to go back to main page</a>
</body>
</html>