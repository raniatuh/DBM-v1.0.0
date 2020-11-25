<?php

include('conn.php');

if(!empty($_POST['but_update'])){
 echo('please choose one product to update');


if(isset($_POST['but_update'])){

  if(isset($_POST['update'])){
    foreach($_POST['update'] as $updateid){
      //values from the user
      $quantity = $_POST['quantity_'.$updateid];
      $product = $_POST['product_'.$updateid];
      $branch = $_POST['branch_'.$updateid];
      $super = $_POST['super_'.$updateid];
      $teao = $_POST['teao_'.$updateid];
      $abemama = $_POST['abemama_'.$updateid];
      //we do math here
      $total = $branch + $super + $teao + $abemama;
      $available = $quantity - $total;

     //update the table
         $sql = "UPDATE stocks SET
                      quantity='".$quantity."',quantity_out='".$total."',
                      out_branch='".$branch."',super_mall='".$super."',teaoraereke='".$teao."',abemama='".$abemama."',available_quantity='".$available."'
                      WHERE id=".$updateid;
        if(mysqli_query($con,$sql)){
         header('location: cargo.php');
         }
      } 
    }
  }
}

?>
