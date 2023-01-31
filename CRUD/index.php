<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 | Form</title>
    <style>
        body{
            height:100vh;
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
    <div >
        <form action="post.php" method="post" class="form">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="sijala">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="sijala@gmail.com">
            <input type="submit" value="Submit" name="submit" class="btn">
        </form>
    </div>
</body>
</html>