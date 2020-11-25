<?php
//check if the user is loggedin or not if then redirect to login page
include 'session.php';
//Connection for database
include 'conn.php';
//Select Database
$query = "SELECT * FROM stocks";
$result = mysqli_query($con,$query);
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

body{
    background-color: #ddd;
}

input[type="text"] {
    border-radius: 3px;
    border: 1px solid #3c763d;
    font-size: 15px;
   
} 

input[type="text"]:hover {
    border: 1px solid ;
    font-size: 15px;
   
} 

</style>
<body> 
 <form action="staff_edit.php" method="post" autocomplete="off">
     
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<ul class="nav navbar-nav">
<li><a href="staff_stock.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
  </ul>
</nav>
 <h1></h1>
<form method="" action="">
<div class="container">
<!-- Submit button -->
     <input class="btn btn-success" type='submit' value='UPDATE' name="but_update" >
      <input class="btn btn-danger" type='Reset' value='UNTICK' name=''>
</div>
 <div class="table-responsive">
 <table class="table table-striped">
 <thead>
 <tr class="active">
 <th>ID</th>
 <th>QUANTITY</th>
 <th>PRODUCT</th>
 <th>QTY-OUT</th>
 <th>OUT-BRANCH</th>
 <th>AVAILABLE-QTY</th>
 <th>TICK</th>
 </tr>


<?php
     while($row = mysqli_fetch_array($result) ){
         $id = $row['id'];
         $quantity = $row['quantity'];
         $product = $row['product'];
         $out = $row['quantity_out'];
         $branch = $row['out_branch'];
         $available = $row['available_quantity'];
?>
     
</thead>
   <tbody> 
        <td><?= $id ?></td>
           <td><input type='text' name='quantity_<?= $id ?>' value='<?= $quantity ?>' ></td>
           <td><input type='text' name='product_<?= $id ?>' value='<?= $product ?>' ></td>
           <td><input type='number' name='quantityout_<?= $id ?>' value='<?= $out ?>' ></td>
           <td><input type='text' name='branch_<?= $id ?>' value='<?= $out ?>' ></td>
          <td><input type="number" name="available_<?= $id ?>" value='<?= $available ?>' ></td>
          <td><input type='checkbox' name='update[]' value='<?= $id ?>' ></td>
              
       </tr>

<?php
    }
?>
</tbody>
</table>

</form>

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  // Check/Uncheck ALl
  $('#checkAll').change(function(){
    if($(this).is(':checked')){
      $('input[name="update[]"]').prop('checked',true);
    }else{
      $('input[name="update[]"]').each(function(){
         $(this).prop('checked',false);
      });
    }
  });

  // Checkbox click
  $('input[name="update[]"]').click(function(){
    var total_checkboxes = $('input[name="update[]"]').length;
    var total_checkboxes_checked = $('input[name="update[]"]:checked').length;

    if(total_checkboxes_checked == total_checkboxes){
       $('#checkAll').prop('checked',true);
    }else{
       $('#checkAll').prop('checked',false);
    }
  });
});
</script>

</body>
</html>
