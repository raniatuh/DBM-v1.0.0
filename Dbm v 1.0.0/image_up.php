<?php
include'conn.php';

    $abspath='/var/www/html/uploads/';
    $tempfile=$_FILES['img']['tmp_name']; //This variable stores the temporary file.
    $defFile=$_FILES['img']['name']; //This stores the definitive file (the real path)
    if(is_uploaded_file($tempfile. $abspath))
    { 
        if(move_uploaded_file($tempfile, $absPath)) 
        { 
           
        }
    }
   
?>
