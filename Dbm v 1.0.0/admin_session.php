<?php
   include('conn.php');
   session_start();

   $user_check = $_SESSION['loggedin'];

   $ses_sql = mysqli_query($db,"select username from staff where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];

   if(!isset($_SESSION['loggedin'])){
      header("location:admin_in.php");
      die();
   }
?>
