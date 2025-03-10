<?php
$username = $_POST['username'];
$password = $_POST['password'];

$pass = sha1($password);

echo $pass;
?>

