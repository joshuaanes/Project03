

<?php

$connection = mysqli_connect("localhost", "project3", "project3", "project3");










	// 2. Perform database query
	$query = "SELECT * FROM responses ";


	$result = mysqli_query($connection, $query);
	
?>

<!doctype html>
<html>
<head>
	<title>Responses</title>
</head>
<body>

	<h1>Responses</h1>

	<table border>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email Address</th>
			<th>Message</th>
		</tr>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>
		<tr>
			<td><?php echo $pages["id"]; ?></td>
			<td><?php echo $pages["name"]; ?></td>
			<td><?php echo $pages["email_address"]; ?></td>
			<td><?php echo $pages["message"]; ?></td>
		</tr>
		

<?php } ?>

	</table>

	<br>
	<a href=".">Back to the Index</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>