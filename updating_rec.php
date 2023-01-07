
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="data.css" rel= stylesheet>
</head>
<body>
    
     <!-- <!-- <form method="post"> -->
        <form class ="form" method="POST" action="/php-class/crude/insert.php">
     <!-- <label>First Name :</label>
     <input type="Text" placeholder="F-name" name="fname">
     <br>
     <label>Last Name :</label>
     <input type="Text" placeholder="l-name" name="lname">
     <br>
     <label>Email :</label>
     <input type="Email" placeholder="Email" name="email">
     <br> --> 
     <label>Name:</label>
     <input type="Name" placeholder="Name" name="name">
     <br>
     <label>Email :</label>
     <input type="Email" placeholder="email" name="email">
<br>
     <label>Birth palce :</label>
     <input type="text" placeholder="B-place" name="place">
<br>
     <label>Age :</label>
     <input type="number" placeholder="Age" name="age">
<br>
     <!-- <label>Password</label>
     <input type="password" placeholder="password" name="pass">
     <br> -->
     <button class="add_butn">
        Add Record 
     </button>
</form>
 
    <?php
    include "connect.php";
   //  include "insert.php";
    $que = "SELECT * FROM `info`";
   $res= mysqli_query($con, $que);
    $no = mysqli_num_rows($res);
   echo" <table class ='table'>";
    echo "<tr>";
     echo "<th>".
          "S.N".
    "</th>";
    echo "<th>".
    "Name".
"</th>";    
    echo "<th>".
    "Email".
"</th>";    
echo "<th>".
"Age".
"</th>";
    echo "<th>".
    "Birth-Place".
"</th>";    
    echo "<th>".
    "Operation".
"</th>";    
    echo "</tr>";
    

   $i=1; 
    
while ($data=mysqli_fetch_array($res)) {
 
echo "<tr>
<td> ".$i++."</td>
   <td>".$data['name']. "</td>
   <td>".$data['email']. "</td>
  
 <td>" .$data['age']."</td>
  <td>" .$data['birthp']."</td>
     <td>
   <a class='anc' href='../crude/delete.php?id=".$data['id']."' >Delete</>
  <a class='anc'href='../crude/updqfinal.php?id=".$data['id']."' >Update</>
     </td>
     
   
    
</tr>";



   

   //  echo "the name is ".$data['name'];
   # code...
}
   //  if ($no > 0) {
      
   //    for ($i=0; $i <$no ; $i++) {
   //        echo '<br>';
   //         $resu= mysqli_fetch_assoc($res);
   //     echo " The id is " . $resu['id'] . "   The name is " . $resu['name'] .
   //       '<button id ="del_butn"type="button">del</button>';
   //        echo '<br=>';
       
   //    }
   //  }else{
   //     echo "no record found ";
   //  }


?>


</body>
</html>