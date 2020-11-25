<?php

include('conn.php');

if(isset($_POST['but_update'])){

  if(isset($_POST['update'])){
    foreach($_POST['update'] as $updateid){

      $quantity = $_POST['quantity_'.$updateid];
      $product = $_POST['product_'.$updateid];
      $quantityout = $_POST['quantityout_'.$updateid];
      $branch = $_POST['branch_'.$updateid];
      $available = $_POST['available_'.$updateid];

      if($quantity !='' && $product !='' && $quantityout !='' && $branch !="" && $available != '' ){
         $sql = "UPDATE stocks SET
                      quantity='".$quantity."',product='".$product."',
                      quantity_out='".$quantityout."',out_branch='".$branch."',available_quantity='".$available."'
                      WHERE id=".$updateid;
         mysqli_query($con,$sql);
         header('location: staff_stock.php');
      } else {
        echo 'product not updated';
      }

    }
  }

}

?>
