<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

    $myemail = "mjamil@kent.edu";
    $headers = "From: ".$mailfrom;
    $txt = "You have recived an email from".$name.".\n\n".$message;

    mail($myemail, '',$txt,$headers);


header("Location: index.html?mailsend");
}




?>