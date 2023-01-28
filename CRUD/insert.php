<?php

$server ="localhost";
$username="root";
$password="";
$dbname="crud";

$con= mysqli_connect($server, $username, $password, $dbname);
if(!$con){
    echo"not connected";
}
//start

$name = $_POST['name'];
$email = $_POST['email'];

$sql="INSERT INTO `crud`( `name`, `email`) VALUES ('$name','$email')";

$result = mysqli_query($con,$sql);
if($result)
{
    echo"data submitted";
}

    else{
        echo"error";
    }

?>