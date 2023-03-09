<?php
require("../Ex1/EmailSender.php");
require("../Ex1/EmailServerInterface.php");
require("../Ex1/MyEmailServer.php");

$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("bathithu2002@gmail.com", "This is a test", "Testtttttttttttttttttttttttttttttttttttttt");
?>