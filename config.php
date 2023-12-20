<?php 
session_start();
$host = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "Main";
$conn = new mysqli($host, $dbUser, $dbPass, $dbName);
$conn->set_charset('utf8');

if (mysqli_connect_error()) {
    printf('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} 
?>
