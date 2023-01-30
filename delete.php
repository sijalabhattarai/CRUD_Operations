<?php
include'insert.php';
if(isset($_GET['deletesno'])){
    $id=$_GET['deletesno'];

    $sql="delete from `crud` where sno=$sno";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:insert.php');
    }else{
        die(mysqli_error($con));
    }
}
?>  