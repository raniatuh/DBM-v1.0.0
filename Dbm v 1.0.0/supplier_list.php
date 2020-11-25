<?php
//check if is loggedin or not, if not redirect to loginpage
include 'session.php';

//add connection
include 'conn.php';

//delete stafff
include 'conn.php';

if(isset($_GET['action'])){
    $id = $_GET['id'];
    mysqli_query($con, 'delete from staff where id=' .$id);
}

//Select Database
$query = "SELECT * FROM suppliers";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>

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
       <li><a href="cargo.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="table-responsive">
 <table class="table table-hover">
 <thead>
 <tr class="active">
 
 <th>SUPPLIER</th>
 <th>VIEW PRODUCTs</th>
 </tr>
</thead>
<?php
//Fetch suppliers form database
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
?>
<tbody>
    <tr>
        <td><h4><?php echo $row['name']; ?></h4></td>
        <td><a href="supplier_product.php?supplier=<?php echo $row['name']; ?>&action=select" data-toggle="tooltip" title="view supplier product"
            class="btn btn-success"  ><span class="glyphicon glyphicon-eye-open"></span></a></td></td>
    </tr>
</tbody>

</div>
<?php
    }
  }
?>  
</table>

