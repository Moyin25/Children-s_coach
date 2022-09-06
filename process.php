<?php
$db = mysqli_connect("localhost", "root", "", "image_upload");

if(isset($_POST['sendMail'])){
    echo $_POST['message'];
    $email = "admnlivepal.com";
    $message = $_POST['message'];
    $subject = "Complain";
    $header = "livepeatal company";
    mail($email,$subject,$message,$header);
    return 1;
}else{
    echo "Message Not Send";
    return;
}
