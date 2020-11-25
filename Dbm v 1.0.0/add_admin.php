<?php

include 'admin_session.php';

?>

<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    </head>

    <body style="height:"1500px">

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
     <li><a href="admin.php" data-toggle="tooltip" title="Admin">Admin</a></li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Add Admin</a></li>
     
    </ul>
  </div>
</nav>

        <div class="container">
            

        <h2>Add Admin</h2>

        <p>Fill in this form to add another Admin</p>

        <form  class="form-horizontal" action="admin_regis.php" method="post" autocomplete="off">

             <div class="form-group">
            
                <div class="col-xs-3">                

                <label>Name</label>

                <input class="form-control" type="text" name="name" id="name" value="" required>

            </div>
                </div>

             <div class="form-group">
            
                <div class="col-xs-3">                

                <label>Admin Username</label>

                <input class="form-control" type="text" name="username" id="username" value="" required>

            </div>
                </div>

             <div class="form-group">
                    <div class="col-xs-3">

                <label>Admin Password</label>

                <input class="form-control" type="password" name="password" id="password"  value="" required>

            </div>
                </div>

             <div class="form-group">
                <div class="col-xs-3">
            
                <label>Phonenumber</label>

                <input class="form-control" type="number" name="phone" id="phone" value=""required>

            </div>
                </div>
          
            <div class="form-group">
                <div class="col-xs-3">
                <input type="submit" class="btn btn-warning" value="Submit">

                <input type="reset" class="btn btn-defult" value="Cancel">
                
                </div>
            </div>
