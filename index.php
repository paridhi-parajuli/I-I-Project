<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM details");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Event</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Date</th> <th>Location</th> <th>Organizer</th>
    </tr>
    <?php
    while($res_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res_data['name']."</td>";
        echo "<td>".$res_data['event_date']."</td>";
        echo "<td>".$res_data['location']."</td>";
        echo "<td>".$res_data['organizer']."</td>";
        echo "<td><a href='edit.php?id=$res_data[id]'>Edit</a> | <a href='delete.php?id=$res_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>