<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'J@n1ck';
$DATABASE_NAME = 'henicki_db';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['phone'])) {
	// Could not get the data that should have been sent.
	die ('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['phone'])) {
	// One or more values are empty.
	die ('Please complete the registration form');
}

// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, password FROM staff WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo '<h1>You have asigned a staff with this username!</h1>';
	} //else {
		// Username doesnt exists, insert new account
//if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//	die ('Email is not valid!');
}

if (preg_match('/[A-Za-z0-9]+hj/', $_POST['username']) == 0) {
    die ('<h2>Please add valid username must have a "hj" at end</h2>');
}

if (strlen($_POST['password']) > 10 || strlen($_POST['password']) < 5) {
	die ('Password must be between 5 and 10 characters long!');
}


if ($stmt = $con->prepare('INSERT INTO staff (username, password, phone, name) VALUES (?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('ssss', $_POST['username'], $password, $_POST['phone'], $_POST['name']);
	$stmt->execute();
	echo '<script>alert("One staff is added. Now you can ask your staff to login")</script>';
	    echo '<script>window.location="staff_list.php"</script>';
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
	$stmt->close();

$con->close();
?>
