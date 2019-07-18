<html>
    <head></head>
    <body>
        <div>
            <?php 
                ob_start();
                header('Content-Type: text/html; charset=utf-8');
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
                            header('refresh: 10; url=index.php');
                        }
                        else{
                            $conn->query($query);
                            header('refresh: 10; url=index.php');
                        }
                    }
                }
                else{
                    echo("Заполните все поля");
                    die();
                }

                mysqli_close($conn);
            ?>

            <p>вы вернётесь на начальную через 10сек</p>
        </div>
    </body>
</html>
