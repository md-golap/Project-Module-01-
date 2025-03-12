





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <input type="text" placeholder="Enter Username" name="USERNAME"><br>
        <input type="password" name="PASSWORD" id="" placeholder="Enter password"><br>
        <button value="submit">submit</button>
    </form>
</body>
</html>
<?php

    $Username = $_POST['USERNAME'];
    $Password = $_POST['PASSWORD'];



    define("USERNAME", "admin");
    define("PASSWORD", "1234");


    if(empty($Username) || empty($Password)){
        echo "User name or Password in blank";

    }else {
        if($Username === USERNAME && $Password === PASSWORD){
            echo "login Successful!\n";
        }else{
            echo "Invalid Username or Password";
        }
    }















?>