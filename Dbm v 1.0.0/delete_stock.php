<?php
//check session
include 'session.php';
//connection
include 'conn.php';

//getting stock id from operator
$product = $_GET['product'];
//deleting the product
$sql = "DELETE FROM stocks WHERE product ='$product'";

if  (mysqli_query($con, $sql)) {
    echo '<script>alert("One product is deleted")</script>';
	    echo '<script>window.location="cargo.php"</script>';
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>
