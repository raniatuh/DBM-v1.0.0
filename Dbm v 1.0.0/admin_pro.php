<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: admin_in.php');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'J@n1ck';
$DATABASE_NAME = 'henicki_db';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT phone, name FROM admin WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($phone, $name);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Admin Profile</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
        <script src="bootstrap3/jquery.js"></script>
        <script src="bootstrap3/js/bootstrap.min.js"></script>
	</head>
	<body class="loggedin">
		<nav class="navbar navbar-inverse">
<div class="container-fluid">
<ul class="nav navbar-nav">
    <li><a class="" href="admin.php"data-toggle="tooltip" title="Admin">Admin</a></li>
</ul>
<ul class="nav navbar-nav">
</ul>
    <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-toggle="tooltip" title="Logout"><span class="glyphicon glyphicon-option-vertical"></span> 
       <span class="care"></span></a>
        <ul class="dropdown-menu">
         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
		<div class="content">
			<h2><?=$name?></h2>
			<div>
				<p>Admin detail below:</p>
				<table>
					<tr>
						<td>Name:</td>
						<td><?=$name?></td>
					</tr>
					<tr>
						<td>Admin username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Phone number:</td>
						<td><?=$phone?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
