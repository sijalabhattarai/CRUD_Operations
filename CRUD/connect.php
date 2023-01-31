<?php
    $conn = new mysqli("localhost","root","","form");

    if($conn->connect_error){
        echo(" database not connected " . $conn->connect_error);
    } else {
        // connected
    }


?>