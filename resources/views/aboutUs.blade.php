<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">
</head>

<body>
    <section class="schedule">

    </section>
    <script>
        token = localStorage.getItem('token')
        console.log(token)
        if (token) {
            headerProfile = document.querySelector(".schedule")
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
                <a href="http://127.0.0.1:8000" class="schedule__header__register__auth__link userExit">Выйти</a>
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
                <a href="http://127.0.0.1:8000" class="schedule__header__register__auth__link userExit">Выйти</a>
            </div>
        </div>
         <div class="AboutUs__main__info">
            <div class="AboutUs__main__info__imgBlock">
                <img src="{{ asset('img/Group 11 (1).png') }}" alt="" class="AboutUs__main__info__imgBlock__img">
            </div>
            <div class="AboutUs__main__info__textBlock">
                <div>
                    <p>Наш компьютерный клуб готов встретить<br>
                        вас и вашу команду для киберспортивных<br>
                        боёв на виртуальных аренах и предложить<br>
                        одни из самых современных площадок для<br>
                        сражений</p>
                </div>
                <div>
                    <p>Контакты:<br>
                        ProGameNet@gmail.com<br>
                        +7 999 999 99 99</p>
                </div>
                <div>
                    <p>Молодёжный центр Мотыгинского района</p>
                </div>
            </div>
        </div>`
            console.log(headerProfile)
        } else {
            headerProfile = document.querySelector(".schedule")
            headerProfile.innerHTML = `  <div class="schedule__header__mobile">
            <div class="schedule__header__logo__mobile">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="schedule__header__logo__img old">
            </div>
            <div class="schedule__header__menu__mobile">
                <a href="http://127.0.0.1:8000/" class="schedule__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="schedule__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="schedule__header__menu__link">О нас</a>
            </div>
            <div class="schedule__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="schedule__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="schedule__header__register__auth__link">Авторизация</a>
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
                <a href="http://127.0.0.1:8000/registration" class="schedule__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="schedule__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        <div class="AboutUs__main__info">
            <div class="AboutUs__main__info__imgBlock">
                <img src="{{ asset('img/Group 11 (1).png') }}" alt="" class="AboutUs__main__info__imgBlock__img">
            </div>
            <div class="AboutUs__main__info__textBlock">
                <div>
                    <p>Наш компьютерный клуб готов встретить<br>
                        вас и вашу команду для киберспортивных<br>
                        боёв на виртуальных аренах и предложить<br>
                        одни из самых современных площадок для<br>
                        сражений</p>
                </div>
                <div>
                    <p>Контакты:<br>
                        ProGameNet@gmail.com<br>
                        +7 999 999 99 99</p>
                </div>
                <div>
                    <p>Молодёжный центр Мотыгинского района</p>
                </div>
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