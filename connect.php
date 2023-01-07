<?php
    $servername="localhost";
    $username = "root";
    $pass = "";
    $database="upd";
    $con = mysqli_connect($servername,$username,$pass, $database);
    if($con){
     
    }else{
  echo $mysqli_error(); 
    }
    ?>