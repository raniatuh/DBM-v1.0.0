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
<script src="bootstrap3/jquery.js"></script>
<script src="bootstrap3/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
	
    <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#example-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">DBM</a>
		</div>
		
    <div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" datatoggle="tootip" title="Manager tools">Manager <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="add_product.php"><span class="glyphicon glyphicon-plus-sign"></span> Add new product</a></li>
                        <li><a href="update_product.php"><span class="glyphicon glyphicon-upload"></span> Update product</a></li>
                        <li><a href="delete.php"><span class="glyphicon glyphicon-remove-sign"></span> Delete product</a></li>
		                <li><a href="supplier_list.php"><span class="glyphicon glyphicon-copy"></span> Suppliers</a></li>
                        <li><a href="staff_checkin.html"><span class="glyphicon glyphicon-map-marker"></span> Staff check-in</a></li>
                        <li><a href="add_staff.php"><span class="glyphicon glyphicon-edit"></span> Add staff</a></li>
                        <li><a href="del_staff.php"><span class="glyphicon glyphicon-share"></span> Delete staff</a></li>
		                <li><a href="edit_staff.html"><span class="glyphicon glyphicon-wrench"></span> Edit staff</a></li>
			</ul>
               <li><a href="staff_list.php" datatoggle="tooltip" title="List of all your staff">Staff</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-toggle="tooltip" title="Profile and Logout"><span class="glyphicon glyphicon-cog"></span> 
                <span class="care"></span></a>
                <ul class="dropdown-menu">
         <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
         <li><a href="logout.php" class="confirm"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
		</div>
	
	</div>


    <div class="container">
        <div class="form-group ">
            <input class="form-control" id="myInput" type="text" placeholder="Search stock">
        </div>
    </div>
</nav>
 <h1>your stock</h1>
<h3>........</h3>
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
 <th>AVAILABL-QTY</th>
 <th>TOTAL-QTY-OUT</th>
 <th>VIEW</TH>
 </tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
     
</thead>
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
         <td><?php echo $row['available_quantity']; ?></td>
         <td><?php echo $row['quantity_out']; ?></td>
         <td><a href="cargo_info.php?id=<?php echo $row['id']; ?>" datatoggle="tooltip" title="Link to the update page" class="btn btn-info" ><span class="glyphicon glyphicon-eye-open"></span></a></td>    
       </tr>
        <?php
	}
}
else
{
	?>
	<tr>
    <th colspan="2"><h4>Akea kanoan am taibora! </h4></th>
    <th><a class="btn btn-warning" href="add_product.php">KANOAIA IKAI</a>
    </tr>
    <?php
}
?>


</body>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

$('.confirm').on('click', function () {
    return confirm('Are you sure you want to log out?');
});
</script>

</html>
