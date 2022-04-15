<?php
$to = "livewithlokesh@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: milanparajuli2058@gmail.com";

var_dump(mail($to,$subject,$txt,$headers));
?>