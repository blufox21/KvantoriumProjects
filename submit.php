<?php
header('Content-Type: text/html; charset=utf-8');
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $name = $_POST['fio'];
    $mail = $_POST['email'];

    $host = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "n";
    if(!empty($username) || !empty($pass) || !empty($name) || !empty($mail)){
        $conn = new mysqli($host, $dbUser, $dbPass, $dbName);
        $conn->set_charset('utf8');
        if (mysqli_connect_error()) {
            printf('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } 
        else {
            $query = "INSERT INTO users (username, pass, fio, email) VALUES (" . $username . "," . $pass . "," . $name . "," . $mail . ")";
            printf($query);
            printf($conn->query($query));
        }
    }
    else{
        echo("Заполните все поля");
        die();
    }

    mysqli_close($conn);
?>