<?php
//check if is loggedin or not, if not redirect to loginpage
include 'session.php';

//add connection
include 'conn.php';

//Select table in the database
$query = "SELECT * FROM manager";
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
       <li><a href="admin.php"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="form-group ">
 <input class="form-control" id="myInput" type="text" placeholder="Search..">
</div>
</div>

<div class="table-responsive">
 <table class="table table-striped">
 <thead>
 <tr class="active">
 <th>ID</th>
 <th>NAME</th>
 <th>USERNAME</th>
 <th>EMAIL</th>
 <th>PHONE</th>
 <th>ADDED ON</th>
 <th>VIEW</th>
 </tr>
<?php
//Fetch accounts form manager list
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
     
</thead>
   <tbody id="myTable"> 
        <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['username']; ?></td>
         <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['phone']; ?></td>
         <td><?php echo $row['added']; ?></td>
         <td><a href="#" class="btn btn-success" ><span class="glyphicon glyphicon-eye-open"></span></a></td>
        </tr>
   </tbody>
        <?php
	}
} else {
	?>
	<tr>
    <th colspan="2">Database is empty.</th>
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
</script>
</html>

