<?php
require_once "connect.php";
    
if(isset($_GET['sno'])){

    $sno = mysqli_real_escape_string($conn, $_GET['sno']);
    $name = mysqli_real_escape_string($conn, $_GET['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "DELETE FROM form WHERE  sno= $sno";
    if($conn->query($sql)===TRUE){
        echo "Record deleted";
        header("Location: table.php");
    }else{
        echo "ERROR";
        header("Location: table.php");

    }
} else {
    echo "Not found";
}
?>
