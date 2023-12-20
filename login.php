<?php
//require_once "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_SESSION["loggedin"] === false){
        //check field emptiness
        if(!empty($_POST["username"])){
            $username = trim($_POST["username"]);
        }
        else{
            echo("Заполните все поля");
            die();
        }

        if(!empty($_POST["password"])){
            $password = md5(trim($_POST["password"]));
        }
        else{
            echo("Заполните все поля");
            die();
        }

        //sql query
        $sql = "SELECT * FROM users WHERE username='".$username."' AND pass='".$password."'";
        //execute query
        $res = $conn->query($sql);

        if($res->num_rows > 0){

            $_SESSION["loggedin"] = true;
            $_SESSION["user"] = $username;

            //redirect back to main page
            echo('<script>window.location.href="index.php";</script>');
            //header("location: index.php");
        }else{
            echo("неверный пароль или ник");
        }
    }else{
        $_SESSION["loggedin"] = false;
        $_SESSION["user"] = "";
        echo('<script>window.location.href="index.php";</script>');
    }
}
?>
