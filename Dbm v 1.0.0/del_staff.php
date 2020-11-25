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
<style>
body {
    background: url(hj.png) no-repeat;
    background-size: 15%;
    background-position: center;
   
}
</style>

    <body style="height:"1500px">

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="cargo.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
    
    </ul>
  </div>
</nav>
		 <div class="container">
            

        <h2>Delete staff</h2>

        <p>Please use the correct username</p>
    <div class="container">
        <form  class="form-horizontal" action="delete_staff.php" method="GET" autocomplete="off">

            <div class="form-group">
   
                <label>Staff username</label>

                <input class="form-control" type="text" name="username" id="username" required>

            </div>

             <div class="form-group">
                <div class="col-xs-3">
                <input type="submit" class="btn btn-danger" value="Delete">
               </div>
              <div class="form-group">
                <div class="col-xs-3">
                <input type="reset" class="btn btn-default" value="Reset">
                
                </div>
            </div>
                   
			</form>
		</div>
