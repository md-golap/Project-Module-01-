<?php

    define("USERNAME", "admin");
    define("PASSWORD", "1234");



    echo "Enter Username";
    $Username = readline();

    echo "Enter Password";
    $Password = readline();


    
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