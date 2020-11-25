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


    <body style="height:"1500px">

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="cargo.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
    
    </ul>
  </div>
</nav>
		 <div class="container">
            

        <h2>Delete product</h2>

        <p>Please use the correct product name</p>
       
        <form  class="form-horizontal" action="delete_stock.php" method="GET" autocomplete="off">
        <div class="container">
            <div class="form-group">
            
                <label>Product-name</label>

                <input class="form-control" type="text" name="product" id="product" required>
       </div>
            </div>

             <div class="form-group">
                <div class="col-xs-3">
                <input type="submit" class="btn btn-danger" value="Delete">
            </div>
                </div>
             <div class="form-group">
                <div class="col-xs-3">                            
                <input type="reset" class="btn btn-default" value="Reset">   
                </div>
            </div>
        </div>   
			</form>
		</div>
