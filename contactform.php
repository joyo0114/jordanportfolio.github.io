<?php

if (isset($_POST)['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $mailFrom = $_['mail'];
    $message = $_POST['message'];

    $mailTo = 'jordany1492@gmail.com';
    $headers = "From: ".$mailFrom;
    $txt = 'You have recieved an email from' .$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}