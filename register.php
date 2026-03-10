<?php

if($_SERVER["REQUEST_MEHTOD"] == "POST"){
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    //fomat username
    $username = strtolower($username);
    $username = ucwords($username);

    //validate lenght
    if (strlen($username)<3){
        die("username must be at leat 3 charactrs");
    }
    if (strlen($password)<8){
        die("password must be at leat 8 charactrs");
    }

    //secure inpt
    $username = htmlspecialchars($username);
    $password = addcslashes($password);
    echo "Registration Successful <br>";
    echo "username: $username";
}
?>