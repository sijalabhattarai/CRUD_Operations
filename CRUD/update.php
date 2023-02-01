<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | <?php 
        require_once "connect.php";
    if(isset($_GET['name'])){
        $name = mysqli_real_escape_string($conn, $_GET['name']);
        echo $name;
    }
    ?>
    </title>
    <style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .form{
            display:flex;
            flex-direction:column;
            padding:30px;
            background-image: linear-gradient(skyblue,greenyellow,pink);
            gap:20px;
            width: 200px;
            border-radius: 10px;
        }
        input{
            border-radius: 3px;
        }
        .btn{
            width: 100px;
            margin: auto;
        }
    
    </style>
</head>

<body>
    <?php
    
    if(isset($_GET['sno'])){
        $sno = mysqli_real_escape_string($conn, $_GET['sno']);
        $sql = "SELECT * FROM form WHERE sno=$sno";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            foreach($result as $res):
?>
    <div class='form'>
        <form action='userupd.php?sno=<?php echo $res['sno'] ?>' method='post'>
            <label for='name'>Name</label>
            <input type='text' name='name' id='name' value='<?php echo $res['name'] ?>' placeholder='Enter your name'>
            <label for='email'>Email</label>
            <input type='email' name='email' id='email' value='<?php echo $res['email'] ?>'
                placeholder='Enter your email'>
            <input type='submit' value='Edit' name='submit'>
        </form>
    </div>


    <?php
            endforeach;
        }else{
            echo "No record found";
        }
    }
        
        
        
    ?>
</body>

</html>