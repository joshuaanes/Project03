<?php

$name = Trim(stripslashes($_POST['name']));
$email_address = Trim(stripslashes($_POST['email_address']));
$message = Trim(stripslashes($_POST['message']));

$connection = mysqli_connect("localhost", "project3", "project3", "project3");

?>

<?php

$query = "INSERT INTO responses (name, email_address, message) VALUES ('name', 'email_address', 'message')";
$result = mysqli_query($connection, $query);
$NumberOfRowsAffected = mysqli_affected_rows($connection);
if($NumberOfRowsAffected < 1 ) {
 die('No records were written to the database. Waaaa!');
} 

mysqli_close($connection);

header("Location: database-read.php");

?>