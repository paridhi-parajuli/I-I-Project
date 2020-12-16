<html>
<head>
	<title>Add Event
    </title><link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Date</td>
				<td><input type="date" name="event_date"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location"></td>
			</tr>
			<tr>
				<td>Organizer</td>
				<td><input type="text" name="organizer"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$event_date = $_POST['event_date'];
		$location = $_POST['location'];
		$organizer = $_POST['organizer'];

	
		include_once("config.php");


		$result = mysqli_query($mysqli, "INSERT INTO details(name,event_date,location,organizer) VALUES('$name','$event_date','$location','$organizer')");

		
		echo "Event added successfully. <a href='index.php'>View Events</a>";
	}
	?>
</body>
</html>