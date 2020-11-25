<?php
//redirect to admin login page if not logfedin
include 'admin_session.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
<script src="bootstrap3/jquery.js"></script>
<script src="bootstrap3/js/bootstrap.min.js"></script>
<body>         
<body style="height:"1500px">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">

</div>
<ul class="nav navbar-nav">

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" data-toggle="tooltip" title="Admin tools">Admin
<span class="caret"></span></a>
<ul class="dropdown-menu">

                     <li><a href="staff_checkin.html"><span class="glyphicon glyphicon-map-marker"></span> Manager check-in</a></li>
                    <li><a href="add_manag.php"><span class="glyphicon glyphicon-edit"></span> Add Manager</a></li>
                <li><a href="remove_staff.html"><span class="glyphicon glyphicon-share"></span> Lock Manager</a></li>
		    <li><a href="edit_staff.html"><span class="glyphicon glyphicon-wrench"></span> Edit Manager</a></li>
        </ul>
      <li><a href="mana_list.php" data-toggle="tooltip" title="List of all managers"> Managers</a></li>
	 </ul> 
    <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-toggle="tooltip" title="Adding Admin. Admin Profile and Admin Logout"><span class="glyphicon glyphicon-cog"></span> 
       <span class="care"></span></a>
        <ul class="dropdown-menu">
         <li><a href="add_admin.php"><span class="glyphicon glyphicon-exclamation-sign"></span> Add Admin</a></li>
         <li><a href="admin_pro.php"><span class="glyphicon glyphicon-user"></span> Admin profile</a></li>
         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
 <h1></h1>
 
