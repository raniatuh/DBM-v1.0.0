<?php
//connection
include'conn.php';

//delete
if(isset($_GET['action'])){
    $id = $_GET['id'];
    mysqli_query($con, 'delete from stocks where id=' .$id);
    header('location: cargo.php');
}

//get the stock information from the database
if(isset($_GET['id'])){
    $result = mysqli_query($con, 'select * from stocks where id ='.$_GET['id']);
    $stock = mysqli_fetch_object($result);
}

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
<h1>Product detail</h1>
<div class="jumbotron">
<table>
<tr>
    <td><p>Product:</p></td>
    <div class="alert alert-success">
    <td class="alert alert-info"><p><?php echo $stock->product; ?></td>
    </div>
</tr>
<tr>
    <td><p>Supplier:</p></td>
    <td><p><?php echo $stock->supplier; ?></p></td>
</tr>
<tr>
    <td><p>Quantity:</p></td>
    <td class="alert alert"><p><?php echo $stock->quantity; ?></p></td>
</tr>
<tr>
    <td><p>Origi-price:</p></td>
    <td><p><?php echo $stock->original_price; ?></p></td>
</tr>
<tr>
    <td><p>Selling-price:</p></td>
    <td><p><?php echo $stock->selling_price; ?></p></td>
</tr>
<tr>
    <td><p>Available-qty:</p></td>
    <td><p><?php echo $stock->available_quantity; ?></p></td>
</tr>
<tr>
    <td><a href="cargo_info.php?id=<?php echo $stock->id; ?>&action=delete" data-toggle="tooltip" title="Delete product permenently"
            class="btn btn-danger" onclick="return confirm('Careful this action can not be undone!')" ><span class="glyphicon glyphicon-trash"></span></a></td>
</tr>
</div>
</div>
</table>
