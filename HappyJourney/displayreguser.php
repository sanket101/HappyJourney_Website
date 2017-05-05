<?php
    $dbc = mysqli_connect('localhost','root','');
    if(!$dbc)
    {
        die('Not Connected:'.mysql_error());
    }
    $db_selected = mysqli_select_db($dbc,'flight_details');
    if(!$db_selected)
    {
        die('Cant connect:'.mysqli_error());
    }
    $sql = "SELECT * FROM passenger";
    $records = mysqli_query($dbc,$sql);
?>
<html>
<body>
    <h1>Flight's Database</h1>
    <table width="600" border="1" cellspacing="1" cellpadding="1">
        <tr>
            <th>Name</th>
            <th>Contact No.</th>
            <th>Email Id</th>
            <th>Class</th>
            <th>Flight No</th>
            <th>Ticket Number</th>
        </tr>
        <?php
            while($pass=mysqli_fetch_assoc($records))
            {
                echo "<tr>";
                echo "<td>".$pass['name']."</td>";
                echo "<td>".$pass['contact_no']."</td>";
                echo "<td>".$pass['email_id']."</td>";
                echo "<td>".$pass['class']."</td>";
                echo "<td>".$pass['flight_num']."</td>";
                echo "<td>".$pass['ticket_no']."</td>";
                echo "</tr>";
            }
		?>
    </table>
</body>
</html>