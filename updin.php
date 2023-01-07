<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "connect.php";
     $name = $_POST['name'];
     $age = $_POST['age'];
     $place = $_POST['place'];
     $id = $_POST['id'];
    $id = $_GET['id'];
    echo $id;
    echo $name;
    $que ="UPDATE `info` SET `name` = '$name', `birthp` = '$place', `age` = '$age' WHERE `info`.`id` = $id;";
   $rres=  mysqli_query($con, $que);
    if($rres){
        // echo "Okay";
        header("location:../crude/updating_rec.php");
    }else{
    mysqli_error($con);
    }
    
        // header("location:../php-class/updating_rec.php");
    ?>
    
</body>
</html>