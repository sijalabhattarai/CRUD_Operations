<?php
    $conn = new mysqli("localhost","root","","form");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   // echo "Connected successfully";

?>
