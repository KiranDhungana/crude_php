<?php
include "connect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    $que = "DELETE FROM `info` WHERE `info`.`id` = '$id';";
   $resul= mysqli_query($con, $que);
    if($resul){
        header("location:../crude/updating_rec.php");
    }else{
        echo "not";
    }
    include 'updating_rec.php';
}

?>