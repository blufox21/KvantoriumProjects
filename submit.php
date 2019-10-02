<html>
    <head><meta charset="utf-8"></head>
    <body>
        <div>
            <?php 
                ob_start();
                $username = $_POST['username'];
                $pass = md5($_POST['password']);
                $name = $_POST['fio'];
                $mail = $_POST['email'];

                $host = "localhost";
                $dbUser = "root";
                $dbPass = "";
                $dbName = "Main";
                $conn = new mysqli($host, $dbUser, $dbPass, $dbName);
                $conn->set_charset('utf8');
                
                if(!empty($username) && !empty($pass) && !empty($name) && !empty($mail)){
                    if (mysqli_connect_error()) {
                        printf('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
                    } 
                    else {
                        $checkQuery = "SELECT * FROM users WHERE username='" . $username . "' OR email='" . $mail . "'";
                        $result = $conn->query($checkQuery);
                        $query = "INSERT INTO users VALUES ('" . $username . "','" . $pass . "','" . $name . "','" . $mail . "')";
                        if($result->num_rows  > 0){
                            echo('<div> </div>');
                            echo '<script>setTimeout(function () {
                                //Redirect with JavaScript
                                window.location.href= "index.php";
                             }, 5000);</script>';
                        }
                        else{
                            $conn->query($query);
                            echo '<script>setTimeout(function () {
                                //Redirect with JavaScript
                                window.location.href= "index.php";
                             }, 5000);</script>';
                        }
                    }
                }
                else{
                    echo("Заполните все поля");
                    die();
                }

                mysqli_close($conn);
            ?>

            <p style="width: 100%; height: 100%; text-align: center; margin-top: 260px; font-size: 40px; font-family: 'Ubuntu', sans-serif;">вы вернётесь на начальную через 10 секунд</p>
        </div>
    </body>
</html>
