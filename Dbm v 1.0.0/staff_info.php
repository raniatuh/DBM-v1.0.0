<?php
//check if login, if not redirect to login page
include 'session.php';

//connection
include 'conn.php';
//get the id from the staff table
    if(isset($_GET['id'])){
    $query = "SELECT * FROM staff WHERE id=".$_GET['id'];
    $result = mysqli_query($con,$query);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
        $id = $row['id'];		
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
       <li><a href="staff_list.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="jumbotron">
 
    <table cellpadding="4" cellspacing="4">
    <tbody>
        <tr>
            <td><h3>Id:</h3></td>
            <td><h3><?php echo $row['id']; ?></h3><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
        </tr>
        <tr>
            <td><h3>Name:</h3></td>
            <td><h3><?php echo $row['name']; ?></h3></td>
        </tr>
        <tr>
            <td><h3>Username:</h3></td>
            <td><h3><?php echo $row['username']; ?></h3></td>
        </tr>
        <tr>
            <td><h3>Phone:</h3></td>
            <td><h3><?php echo $row['phone']; ?></h3></td>
        </tr>
        <tr>
            <td><h3>Added on:</h3></td>
            <td><h3><?php echo $row['added']; ?></h3></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            
        </tr>
    </tbody>
<?php } 
    }
    } 
?>

