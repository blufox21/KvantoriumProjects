<div class="popup">
    <div class="signinup">
        <a onclick="document.getElementById('reg').style.display = 'block';
                    document.getElementById('login').style.display = 'none';">Регистрация</a>
        /
        <a onclick="document.getElementById('reg').style.display = 'none';
                    document.getElementById('login').style.display = 'block';">войти</a>
    </div>

    <div id="reg">
        <div class="field">
            <span>Введите желаемый ник:</span>
            <input type="text" placeholder="Username">
        </div>
        <div class="field">
            <span>Введите пароль:</span>
            <input type="text" placeholder="Password">
        </div>
        <div class="field">
            <span>Введите ваше ФИО (полностью):</span>
            <input type="text">
        </div>
        <div class="field">
            <span>Введите ваш Email:</span>
            <input type="text" placeholder="example@mail.ru">
        </div>
    </div>

    <div id="login">

    </div>
</div>
