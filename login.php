<?php
if($_SERVER[REQUEST_METHOD] == "POST"){
    $dbUser = "Admin";
    $dbPass = "admin123";
    $user = $_POST["username"];
    $user = $_POST["password"];
    if(strcasecmp($user, $dbUser) != 0){
        die("worng usename");
    }
    if(strcmp($pass, $dbPass) != 0){
        die("wrong passwrod");
    }
    echo "Login Successfull";
}
?>