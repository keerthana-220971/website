<?php
$uploadDir = "uploads/";
if(!is_dir($uploadDir)){
    mkdir($uploadDir , 0777, true);
}
// dowload logic 
if(isset($_GET['download'])){
    $file = basename($_GET['download']);
    $filepath = $uploadDir.$file;
    if(file_exists($filepath)){
        header("content-Description:filetransefr");
        header("content-Type:application/octet-stream");
        header("content-depositin:attachment ; filename".$file);
        header("content-length:".filesize($filepath));
        exit;
    }
    else  {
        echo" file jot fount";
        }
}
// upload logic 
$uploadedFile = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_FILES['myfile'])){
        $filename = $_FILES["myfile"]["name"];
        $tmpname = $_FILES["myfile"]["tempname"];
        $targetFile = $uploadDir.basename($filename);
        if(move_uploaded_file($tmpname,$targetFile)){
            $uploadedFile = $filename;
        } else{
            echo "FILE UPLOAD FAILED";
        }
    }
}
?>