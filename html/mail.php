<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "yk@aspectsolution.co.in"
    $headers = "From : ".$mailfrom;
    $txt = "you have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);


}
?>