<?php

include 'session.php';

?>

<!DOCTYPE html>
<html>

    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    </head>

    <body>

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="cargo.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
     
    </ul>
  </div>
</nav>

        <div class="container">
            

        <h2>Add Staff</h2>

        <p>Please fill in this form to add staff</p>
       <div class="container">
        <form  class="form-horizontal" action="staff_regis.php" method="post" autocomplete="off">

             <div class="form-group">
            
               
                <label>Name</label>

                <input class="form-control" type="text" name="name" id="name" value="" required>

            </div>
               

             <div class="form-group">
            
                              

                <label>Username</label>

                <input class="form-control" type="text" name="username" id="username" value="" required>

            </div>
               
             <div class="form-group">
                    

                <label>Password</label>

                <input class="form-control" type="password" name="password" id="password"  value="" required>

            </div>
                

             <div class="form-group">
                
                <label>Phonenumber</label>

                <input class="form-control" type="number" name="phone" id="phone" value=""required>

            </div>
                
            <div class="form-group">
                <div class="col-xs-3">
                <input type="submit" class="btn btn-info" value="Submit">
           </div>
           <div class="form-group">
                <div class="col-sx-3">
                <input type="reset" class="btn btn-defult" value="Reset">
                </div>
            </div>
