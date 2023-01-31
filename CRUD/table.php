<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<body>

    <table border="1px">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Time</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
    require_once "connect.php";

    $sql = "SELECT * FROM form";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "<tbody>";
        foreach($result as $index => $res) : 
            ?>
        <tr>
            <td><?php echo $res['sno']?></td>
            <td><?php echo $res['name']?></td>
            <td><?php echo $res['email']?></td>
            <td><?php echo $res['time']?></td>
            <td><a href="userdel.php?sno=<?php echo $res['sno'] ?>&name=<?php echo $res['name']?>">Delete</a></td>
        </tr>
        <?php
        endforeach;
        echo "</tbody>";
        
        }else{
        echo "No Data available";
        }

        ?>

    </table>

</body>

</html>