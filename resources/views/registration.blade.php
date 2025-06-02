<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
</head>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <section class="registration">
        <div class="registration__header__mobile">
            <div class="registration__header__logo__mobile">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="registration__header__logo__img">
            </div>
            <div class="registration__header__menu__mobile">
                <a href="http://127.0.0.1:8000/" class="registration__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="registration__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="registration__header__menu__link">О нас</a>
            </div>
            <div class="registration__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="registration__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="registration__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        <div class="registration__header">
            <div class="registration__header__menu">
                <a href="http://127.0.0.1:8000/" class="registration__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="registration__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="registration__header__menu__link">О нас</a>
            </div>
            <div class="registration__header__logo">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="registration__header__logo__img">
            </div>
            <div class="registration__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="registration__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="registration__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        <div class="registration__main">
            <div class="registration__main__form">
                <p>Имя</p><br>
                <input type="text" id="name" name="name" class="registration__main__form__input"><br>
                <p>Фамилия</p><br>
                <input type="text" id="surname" name="surname" class="registration__main__form__input"><br>
                <p>Отчество</p><br>
                <input type="text" id="patronymic" name="patronymic" class="registration__main__form__input"><br>
                <p>email</p><br>
                <input type="text" id="email" name="email" class="registration__main__form__input"><br>
                <p>Пароль</p><br>
                <input type="password" id="password" name="password" class="registration__main__form__input"><br>
                <button class="registration__main__form__input__button">Зарегистрироваться</button>
            </div>
        </div>
    </section>




    <script>
        button = document.querySelector(".registration__main__form__input__button")

        button.addEventListener("click", async () => {
            name = document.querySelector("#name").value
            surname = document.querySelector("#surname").value
            patronymic = document.querySelector("#patronymic").value
            email = document.querySelector("#email").value
            password = document.querySelector("#password").value

            let user = {
                Имя: name,
                Фамилия: surname,
                Отчество: patronymic,
                email: email,
                Пароль: password,
            };

            let response = await fetch('http://127.0.0.1:8000/api/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(user)
            });

            let result = await response.json();
            if (result.message == "NotSuccess") {
                if (result.name.length > 1) {
                    document.querySelector("#name").value = ""
                    document.querySelector("#name").setAttribute("placeholder", result.name)
                }
                if (result.surname.length > 1) {
                    document.querySelector("#surname").value = ""
                    document.querySelector("#surname").setAttribute("placeholder", result.surname)
                }
                if (result.patronymic.length > 1) {
                    document.querySelector("#patronymic").value = ""
                    document.querySelector("#patronymic").setAttribute("placeholder", result.patronymic)
                }
                if (result.email.length > 1) {
                    document.querySelector("#email").value = ""
                    document.querySelector("#email").setAttribute("placeholder", result.email)
                }
                if (result.password.length > 1) {
                    document.querySelector("#password").value = ""
                    document.querySelector("#password").setAttribute("placeholder", result.password)
                }
            } else {
                localStorage.setItem("token", result.token)
                localStorage.setItem("userId", result.user_id)
                localStorage.setItem("userName", result.user_name)
                localStorage.setItem("email", result.email)
                window.location.replace("http://127.0.0.1:8000/auth");
            }

        })
    </script>
</body>

</html>