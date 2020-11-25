<?php
//sessioncheck
include'session.php';
//connection
require_once'conn.php';
?>
<head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
         <script src="bootstrap3/jquery.js"></script>
  <script src="bootstrap3/js/bootstrap.min.js"></script>

    </head>

    <body style="height:"1500px">

        <nav class="navbar fixed-top navbar-expand-md navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
       <li><a href="supplier_list.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
    </ul>
  </div>
</nav>

<?php
//set acction
if(isset($_GET['action'])){
    $supplier = $_GET['supplier'];
    $query = "SELECT * FROM stocks WHERE supplier LIKE '%$supplier%'";
    $result = mysqli_query($con,$query) or trigger_error(mysql_error());
	
?>
<div class="container-fluid">
<div class="table-responsive">
 <table class="table table-hover">
 <thead>
 <tr class="active">
<th>SUPPLIER</th>
 <th>PRODUCT</th>
 <th>QUANTITY</th>
 <th>SELL-PRICE</th>
 <th>DELIVER</th>
 <th>SUPER-MALL</th>
 <th>TEAORAEREKE</th>
 <th>ABEMAMA Is</th>
 <th>TOTAL-QTY-OUT</th>
 <th>AVAILABL-QTY</th>
 <th>VIEW</TH>
 </tr>

</thead>
<?php
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
        $id = $row['id'];
?>	
   <tbody id='myTable'>
        <tr>
         <td><?php echo $row['supplier']; ?></td>
         <td><?php echo $row['product']; ?></td>
         <td><?php echo $row['quantity']; ?></td>
         <td><?php echo $row['selling_price']; ?></td>
         <td><?php echo $row['out_branch']; ?></td>
         <td><?php echo $row['super_mall']; ?></td>
         <td><?php echo $row['teaoraereke']; ?></td>
         <td><?php echo $row['abemama']; ?></td>
         <td><?php echo $row['quantity_out']; ?></td>
         <td><?php echo $row['available_quantity']; ?></td>
         <td><a href="cargo_info.php?id=<?php echo $row['id']; ?>" datatoggle="tooltip" title="Link to the update page" class="btn btn-info" ><span class="glyphicon glyphicon-eye-open"></span></a></td>    
       </tr>
  </tbody>
      <?php
       
	}
} else
{
	?>
	<tr>
    <th colspan="2"><h4>Oops...Titabo akea ana product!</h4></th>
    <th><a class="btn btn-info" href="add_product.php">KAOTIA IKAI</a>
    </tr>
    <?php
}

}
?>
</table>
</div>
</div>
