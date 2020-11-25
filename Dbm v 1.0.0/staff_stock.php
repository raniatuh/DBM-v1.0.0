<?php
//check if the user is loggedin or not if then redirect to login page
include 'staff_session.php';
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
<nav class="navbar navbar-inverse">
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" datatoggle="tootip" title="Manager tools">Staff <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="staff_up.php"><span class="glyphicon glyphicon-upload"></span> Update product</a></li>
			</ul>
               
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-toggle="tooltip" title="Profile and Logout"><span class="glyphicon glyphicon-option-vertical"></span> 
                <span class="care"></span></a>
                <ul class="dropdown-menu">
         <li><a href="staff_pro.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
		</div>
	
	</div>
</nav>

 <h1></h1>
 <div class="table-responsive">
 <table class="table table-striped">
 <thead>
 <tr class="active">
 <th>PRODUCT</th>
 <th>QUANTITY</th>
 <th>QTY-OUT</th>
 <th>OUT-TO-BRANCH</th>
 <th>AVAILABLE-QTY</th>
 <th>UPDATE</TH>
 </tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
     
</thread>
   <tbody> 
        <tr>
         <td><?php echo $row['product']; ?></td>
         <td><?php echo $row['quantity']; ?></td>
         <td><?php echo $row['quantity_out']; ?></td>
         <td><?php echo $row['out_branch']; ?></td>
         <td><?php echo $row['available_quantity']; ?></td>
         <td><a href="staff_up.php" datatoggle="tooltip" title="Link to the update page" class="btn btn-warning" ><span class="glyphicon glyphicon-upload"></span></a></td>
         </tr>
        <?php
	}
}
else
{
	?>
	<tr>
    <th colspan="2">AM MANATIA E TUAI KANOA AMI DATABASE</th>
    </tr>
    <?php
}
?>


</body>
</html>
