<?php
     require_once "connect.php";
   if(isset($_POST['submit'])){
      
      // prevent from mysql injection
      $sno = mysqli_real_escape_string($conn, $_GET['sno']);
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      


    $sql = "UPDATE form set name='$name',email='$email' WHERE sno='$sno'";

    $result = $conn->query($sql);

    if($result===TRUE){
        echo "Record updated";
        header("Location: table.php");
   }else{
    echo "Error";
    echo "<a href='table.php'>Back to table </a>";
   }
   }


?>