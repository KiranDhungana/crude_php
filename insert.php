<!-- include "con"// -->
<?php
include "connect.php";
    if(isset($_POST['name'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $place = $_POST['place'];
       $age= $_POST['age'];
      //  $pas = $_POST['pass']
    $ins = "INSERT INTO `info` (`name`,`birthp`,`age`,`email`) VALUES ('$name','$place','$age','$email')";
    $ins_q = mysqli_query($con, $ins);
    if($ins_q){
        header("location:../crude/updating_rec.php");
       echo "connected";
    }else{
       echo mysqli_error(
          $con
       );
    }
      }else{
       print "no data filled";
      }
      ?>