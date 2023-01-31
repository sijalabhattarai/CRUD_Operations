
<?php
    require_once "connect.php";
    
    if(isset($_POST['submit'])){
        echo "submitted";

        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
  
        $sql = "INSERT INTO form (name,email) VALUES ('$name','$email')";
        
        if($conn->query($sql)===TRUE){
            echo "Record added successfully";
            header("Location:table.php");

        }else{
            echo "Error";
        }
    }
?>