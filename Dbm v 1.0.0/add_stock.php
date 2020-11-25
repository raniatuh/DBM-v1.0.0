<?php
include 'conn.php';

//Add post values
$supplier = $_POST['supplier'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$original_price = $_POST['originalprice'];
$selling_price = $_POST['sellingprice'];
$wholesale_price = $_POST['wholesaleprice'];
$quantity_out = $_post['qty_out'];
$out = $_POST['out_branch'];
$super = $_POST['super_mall'];
$teao = $_POST['teaoraereke'];
$teao2 = $_POST['teao2'];
$abm = $_POST['abemama'];
$available = $_POST['avai_qty']; 

//Inserting data into the database
$sql = "INSERT INTO stocks (supplier, product, quantity, original_price, selling_price, wholesale_price, quantity_out, out_branch, super_mall, teaoraereke, teaoraereke2, abemama, available_quantity) VALUES ('$supplier', '$product', '$quantity', '$original_price', '$selling_price', '$wholesale_price', '$quantity_out', '$out', '$super', '$teao', '$teao2', '$abm', '$available')";
if(mysqli_query($con, $sql)){
    echo '<script>alert("Teuana te kaako ae ea rinnako ngkai")</script>';
    echo 'raniatu';
    echo '<script>window.location="add_product.php"</script>';
    exit;
} else{
    echo 'ERROR: could not able to execute $sql. ' .mysqli_error($con);
}

//close connection
mysqli_close($con);
?>
