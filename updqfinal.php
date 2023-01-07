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
// include "insert.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    // echo $id;
}else{
    echo "not found";
}
$get_info = "SELECT * FROM `info` WHERE `id` = $id";
$resul =mysqli_query($con, $get_info);
while($data= mysqli_fetch_array($resul)){
    $name = $data['name'];
        $email = $data['email'];
    $birth = $data['birthp'];
    $age = $data['age'];
        // echo $name;
  
};
?>
    
        <form method="POST" action="../crude/updin.php?id=<?php echo $id ?>">
  <label>Name:</label>
     <input type="text"  value= '<?php echo "$name" ?>' name="name">
     <br>
     <label>Email :</label>
     <input type="Email" value= '<?php echo $email ?>' name="email">
<br>
     <label>Birth palce :</label>
     <input type="text" placeholder="B-place" value= <?php echo $birth ?> name="place">
<br>
     <label>Age :</label>
     <input type="number" placeholder="Age" name="age" value =<?php echo $age?>>
<br>
     <!-- <label>Password</label>
     <input type="password" placeholder="password" name="pass">
     <br> -->
     <button> 
        Update
     </button>
</form>




    
</body>
</html>



