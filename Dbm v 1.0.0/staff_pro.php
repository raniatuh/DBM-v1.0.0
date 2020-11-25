<?php
//include connection
include 'conn.php';

// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT phone, name, stafflevel FROM staff WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($phone, $name, $level);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Staff Profile Page</title>
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
<li><a href="staff_stock.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
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
				<p>Your details are below:</p>
				<table>
					<tr>
						<td>Name:</td>
						<td><?=$name?></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
                    <tr>
						<td>Userlevel:</td>
						<td><?=$level?></td>
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
