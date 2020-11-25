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

    <body style="height:"auto">

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="cargo.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
    </ul>
	</div>
</nav>


     <div class="container">
            

        <h2>Add Product</h2>

        <p>Te bubuti bwa kona kanoa te bwooma aio nikabane</p>
 
    <div class="container">
        <form  class="form-horizontal" action="add_stock.php" method="POST" autocomplete="off">

            <div class="form-group">
            
                <label>Supplier</label>

                <input class="form-control" type="text" name="supplier" value="Henicki Enterprises" required>

            </div>

             <div class="form-group">
           
                <label>Product</label>

                <input class="form-control" type="text" name="product" placeholder="Software" required>

            </div>

             <div class="form-group">
                    
                <label>Quantity</label>

                <input class="form-control" type="number" name="quantity" placeholder="Number only" required>

            </div>

             <div class="form-group">
                
                <label>Original-price</label>

                <input class="form-control" type="text" name="originalprice" placeholder="Number only" required>

            </div>

            <div class="form-group">
                                     
               <label>Selling-price</label>

               <input class="form-control" type="text" name="sellingprice" placeholder="Number only" required>
           
           </div>

           <div class="form-group">
                              
              <label>Wholesale-price</label>

              <input class="form-control" type="text" name="wholesaleprice" placeholder="Number only" required>

          </div>
                
             <input type="hidden" name="qty_out" value="0">
             <input type="hidden" name="out_branch" value="Not yet taken" >        
             <input type="hidden" name="super_mall" value="Not delivered">
             <input type="hidden" name="teaoraereke" value="Not delivered" >
             <input type="hidden" name="teao2" value="Not delivered">
             <input type="hidden" name="abemama" value="Not delivered" >
             <input type="hidden" name="avai_qty" value="As quantity" >
         
            <div class="form-group">
                <div class="col-xs-3">
                <input type="submit" class="btn btn-success" value="Submit">
           </div>
                
             <div class="form-group">
                <div class="col-xs-3">
                <input type="reset" class="btn btn-defult" value="Reset">
                
                </div>
            </div>
    </div>

</body>

</html>
