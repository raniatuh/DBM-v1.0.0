<?php
//check session
include 'session.php';
//connection
include 'conn.php';

//getting staff id from operator
$username = $_GET['username'];
//deleting the product
$sql = "DELETE FROM staff WHERE username ='$username'";

if  (mysqli_query($con, $sql)) {
    echo '<script>alert("One staff is deleted")</script>';
	    echo '<script>window.location="staff_list.php"</script>';
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>
