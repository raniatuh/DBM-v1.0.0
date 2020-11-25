<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
<script src="bootstrap3/jquery.js"></script>
<script src="bootstrap3/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
	
    <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#example-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">DBM</a>
		</div>
		
    <div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" datatoggle="tootip" title="Manager tools">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="manager_in.php"><span class="glyphicon glyphicon-plus-sign"></span> Manager Login</a></li>
                        <li><a href="staff_in.php"><span class="glyphicon glyphicon-upload"></span> Staff Login</a></li>     
			</ul>
              
            </ul>
            
		</div>
	
	</div>
</nav>
		 <div class="container">
            

        <h2>Admin Login Only</h2>

        <p>This page is for admin</p>
    <div class="container">
        <form  class="form-horizontal" action="admin_authen.php" method="post" autocomplete="off">

            <div class="form-group">
 
                <label>Admin Username</label>

                <input class="form-control" type="text" name="username" id="username" required>

            </div>
               
             <div class="form-group">
            
                <label>Admin Password</label>

                <input class="form-control" type="password" name="password" id="password" required>

            </div>

             <div class="form-group">
                <div class="col-xs-3">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
                <div class="form-group">
                <div class="col-xs-3">
                <input type="reset" class="btn btn-default" value="Reset">
                
                </div>
            </div>
                   
			</form>
		</div>
