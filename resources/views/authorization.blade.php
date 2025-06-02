<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/authorization.css') }}">
</head>

<body>
    <section class="authorization">
        <div class="authorization__header__mobile">
            <div class="authorization__header__logo__mobile">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="authorization__header__logo__img">
            </div>
            <div class="authorization__header__menu__mobile">
                <a href="http://127.0.0.1:8000/" class="authorization__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="authorization__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="authorization__header__menu__link">О нас</a>
            </div>
            <div class="authorization__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="authorization__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="authorization__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        <div class="authorization__header">
            <div class="authorization__header__menu">
                <a href="http://127.0.0.1:8000/" class="authorization__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="authorization__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="authorization__header__menu__link">О нас</a>
            </div>
            <div class="authorization__header__logo">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="authorization__header__logo__img">
            </div>
            <div class="authorization__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="authorization__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="authorization__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        <div class="authorization__main">
            <div class="authorization__main__form">
                <p>email</p><br>
                <input type="text" id="email" name="email" class="authorization__main__form__input"><br>
                <p>Пароль</p><br>
                <input type="password" id="password" name="password" class="authorization__main__form__input"><br>
                <button class="authorization__main__form__input__button">Войти</button>
                <button id="buttonEmail" class="authorization__main__form__input__button__email">Войти через почту</button>
            </div>
        </div>
    </section>



    <script>
        button = document.querySelector(".authorization__main__form__input__button")

        button.addEventListener("click", async () => {
            email = document.querySelector("#email").value
            password = document.querySelector("#password").value

            let user = {
                email: email,
                Пароль: password,
            };

            let response = await fetch('http://127.0.0.1:8000/api/auth', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(user)
            });

            let result = await response.json();


            if (result.message == "NotSuccess") {
                if (result.email.length > 1) {
                    document.querySelector("#email").value = ""
                    document.querySelector("#email").setAttribute("placeholder", result.email)
                }
                if (result.password.length > 1) {
                    document.querySelector("#password").value = ""
                    document.querySelector("#password").setAttribute("placeholder", result.password)
                }
            } else {
                if (result.token != undefined) {
                    localStorage.setItem("token", result.token)
                    localStorage.setItem("userId", result.user_id)
                    localStorage.setItem("userName", result.user_name)
                    localStorage.setItem("email", result.email)
                    window.location.replace("http://127.0.0.1:8000/auth");
                }

            }
        })


        buttonEmail = document.querySelector(".authorization__main__form__input__button__email")
        buttonEmail.addEventListener("click", async () => {
            email = document.querySelector("#email").value
            password = document.querySelector("#password").value

            let user = {
                email: email,
                password: password,
            };

            let response = await fetch('http://127.0.0.1:8000/api/authEmail', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(user)
            });

            let result = await response.json();
        })
    </script>
</body>

</html>