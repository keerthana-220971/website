<?php
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h3 style='text-align:center;color:green;'>Form Submitted Successfully!</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Form</title>

<style>

body{
font-family: Arial;
background:#f2f2f2;
}

.container{
width:400px;
margin:50px auto;
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 0 10px gray;
}

h2{
text-align:center;
}

input,textarea{
width:100%;
padding:10px;
margin:10px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:10px;
background:#28a745;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#218838;
}

.error{
color:red;
font-size:14px;
}

</style>

<script>

function validateForm(){

let name = document.forms["myForm"]["name"].value;
let email = document.forms["myForm"]["email"].value;
let message = document.forms["myForm"]["message"].value;

if(name == ""){
alert("Name must be filled out");
return false;
}

if(email == ""){
alert("Email must be filled out");
return false;
}

if(message == ""){
alert("Message must be filled out");
return false;
}

return true;

}

</script>

</head>

<body>

<div class="container">

<h2>Contact Form</h2>

<form name="myForm" method="post" onsubmit="return validateForm()">

<label>Name</label>
<input type="text" name="name">

<label>Email</label>
<input type="email" name="email">

<label>Message</label>
<textarea name="message"></textarea>

<button type="submit">Submit</button>

</form>

</div>

</body>
</html>