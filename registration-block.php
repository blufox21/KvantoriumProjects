<div class="popup">
    <img src="res/images/x.png" class="close" onclick="document.getElementById('overlay').style.display = 'none';">
    <div class="signinup">
        <a class="login-reg" onclick="document.getElementById('reg').style.display = 'block';
                    document.getElementById('login').style.display = 'none';">Регистрация</a>
        /
        <a class="login-reg" onclick="document.getElementById('reg').style.display = 'none';
                    document.getElementById('login').style.display = 'block';">войти</a>
    </div>

    <div id="reg">
        <form action="submit.php" method="POST">
            <div class="field">
                <span>Введите желаемый ник :</span>
                <input type="username" name="username" placeholder="Username" required>
            </div>
            <div class="field">
                <span>Введите пароль :</span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="field">
                <span>Введите ваше ФИО (полностью):</span>
                <input type="name" name="fio" required>
            </div>
            <div class="field">
                <span>Введите ваш Email :</span>
                <input type="email" name="email" placeholder="example@mail.ru" required>
            </div>
            <input type="submit" name="submit" class="submit" value="зарегистрироваться">
        </form>
    </div>

    <div id="login">
    <?php include("login.php"); 
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        echo('<p style="margin-top: 70px; font-size:24px; font-family: \'Roboto Slab\', serif;">Вы уже вошли</p>
              <form method="post"><input type="submit" class="submit" value="Выйти" style="margin:20px;"></form>');
    }else{
        echo('
        <form  method="post">
            <div class="field">
                <span>Введите никнейм :</span>
                <input type="username" name="username" placeholder="Username" required>
            </div>
            <div class="field">
                <span>Введите пароль :</span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" name="submit" class="submit" value="войти">
        </form>');
    }
    ?>
    </div>
</div>
