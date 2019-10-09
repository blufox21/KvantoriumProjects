<?php
//start session
session_start();

// Check if the user is already logged in, if yes then redirect him to the main page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //check field emptiness
    if(!empty($_POST["username"])){
        $username = trim($_POST["username"]);
    }
    else{
        echo("Заполните все поля");
        die();
    }

    if(!empty($_POST["password"])){
        $password = trim($_POST["password"]);
    }
    else{
        echo("Заполните все поля");
        die();
    }

}
?>