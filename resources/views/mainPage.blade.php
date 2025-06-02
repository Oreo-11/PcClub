<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
</head>

<body>
    <section class="mainPage">

    </section>





    <script>
        token = localStorage.getItem('token')
        console.log(token)
        if (token) {
            headerProfile = document.querySelector(".mainPage")
            headerProfile.innerHTML = ` <div class="schedule__header__mobile">
            <div class="schedule__header__logo__mobile">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="schedule__header__logo__img">
            </div>
            <div class="schedule__header__menu__mobile">
                <a href="http://127.0.0.1:8000/" class="schedule__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="schedule__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="schedule__header__menu__link">О нас</a>
            </div>
            <div class="schedule__header__register__auth">
                <img src="{{ asset('img/free-icon-user-1650276 1.png') }}" alt="">
                <a href="http://127.0.0.1:8000/auth" class="schedule__header__register__auth__link userProfile">Алексей</a>
                <a href="" class="schedule__header__register__auth__link userExit">Выйти</a>
            </div>
        </div>
        <div class="schedule__header">
            <div class="schedule__header__menu">
                <a href="http://127.0.0.1:8000/" class="schedule__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="schedule__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="schedule__header__menu__link">О нас</a>
            </div>
            <div class="schedule__header__logo">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="schedule__header__logo__img">
            </div>
            <div class="schedule__header__register__auth">
                <img src="{{ asset('img/free-icon-user-1650276 1.png') }}" alt="">
                <a href="http://127.0.0.1:8000/auth" class="schedule__header__register__auth__link userProfile">Алексей</a>
                <a href="" class="schedule__header__register__auth__link userExit">Выйти</a>
            </div>
        </div>
         <div class="mainPage__mainInfo">
            <div class="mainPage__mainInfo__text">
                <h1 class="mainPage__mainInfo__text_h1">Pro<br>
                    <span>game</span>Net
                </h1>
                <p class="mainPage__mainInfo__text_p">Компьютерный клуб<br>
                    Для настоящих победителей
                </p>
            </div>
            <div class="mainPage__mainInfo__fon">
                <img src="{{ asset('img/Group 7.png') }}" alt="" class="mainPage__mainInfo__fon__img">
            </div>
        </div>`
            console.log(headerProfile)
        } else {
            headerProfile = document.querySelector(".mainPage")
            headerProfile.innerHTML = ` <div class="mainPage__header">
            <div class="mainPage__header__menu">
                <a href="http://127.0.0.1:8000/" class="mainPage__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="mainPage__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="mainPage__header__menu__link">О нас</a>
            </div>
            <div class="mainPage__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="mainPage__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="mainPage__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        <div class="mainPage__mainInfo">
            <div class="mainPage__mainInfo__text">
                <h1 class="mainPage__mainInfo__text_h1">Pro<br>
                    <span>game</span>Net
                </h1>
                <p class="mainPage__mainInfo__text_p">Компьютерный клуб<br>
                    Для настоящих победителей
                </p>
            </div>
            <div class="mainPage__mainInfo__fon">
                <img src="{{ asset('img/Group 7.png') }}" alt="" class="mainPage__mainInfo__fon__img">
            </div>
        </div>`
            console.log(headerProfile)
        }



        userExit = document.querySelectorAll(".userExit")
        userExit[0].addEventListener("click", () => {
            localStorage.clear()
        })
        userExit[1].addEventListener("click", () => {
            localStorage.clear()
        })

        userName = localStorage.getItem('userName')
        h1NameUserMenu = document.querySelectorAll(".userProfile")
        h1NameUserMenu[0].innerText = userName
        h1NameUserMenu[1].innerText = userName
    </script>
</body>

</html>