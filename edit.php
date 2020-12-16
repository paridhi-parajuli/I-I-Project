<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$event_date = $_POST['event_date'];
	$location = $_POST['location'];
	$organizer = $_POST['organizer'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE details SET name='$name',event_date='$event_date',location='$location',organizer='$organizer' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM details WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
	$name = $data['name'];
	$event_date = $data['event_date'];
	$location = $data['location'];
	$organizer = $data['organizer'];
}
?>
<html>
<head>
	<title>Edit Event Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>Date</td>
				<td><input type="date" name="event_date" value=<?php echo $event_date;?>></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value=<?php echo $location;?>></td>
			</tr>
			<tr>
				<td>Organizer</td>
				<td><input type="text" name="organizer" value=<?php echo $organizer;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>