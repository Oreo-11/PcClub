<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>
    <script>
        userId = localStorage.getItem('userId')
        userName = localStorage.getItem('userName')
        token = localStorage.getItem('token')
        if (!token) {
            window.location.replace("http://127.0.0.1:8000/");
        }
    </script>
    <section class="schedule">
        <div class="schedule__header__mobile">
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
        <div class="auth__main">
            <div class="auth__main__text">
                <h1 class="auth__main__text__name">Приветствуем Алексей!</h1>
                <p>Ваша история брони</p>
            </div>
            <div class="auth__main__mainBlock">
                <div class="auth__main__mainBlock__history">
                    <div class="auth__main__mainBlock__history__header">
                        <p>номер компьютера</p>
                        <p>Время</p>
                        <p>Дата</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        async function allInfoAppointment() {

            userId = localStorage.getItem('userId')
            userName = localStorage.getItem('userName')
            token = localStorage.getItem('token')
            if (!token) {
                window.location.replace("http://127.0.0.1:8000/");
            }
            h1NameUser = document.querySelector(".auth__main__text__name")
            h1NameUserMenu = document.querySelectorAll(".userProfile")
            h1NameUserMenu[0].innerText = userName
            h1NameUserMenu[1].innerText = userName
            h1NameUser.innerText = "Приветствуем " + userName + "!"

            let response = await fetch('http://127.0.0.1:8000/api/getAllInfo/' + userId, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },

            });

            let result = await response.json();
            for (i = 0; i < result.length; i++) {
                console.log(result)
                date = result[i].time_start.substr(0, 10)
                timeStart = result[i].time_start.substr(11, 5)
                timeEnd = result[i].time_end.substr(11, 5)
                pcNumber = result[i].pc_number + 1
                console.log(pcNumber, timeEnd, timeStart)
                div = document.createElement("div")
                div.classList.add('auth__main__mainBlock__history__item')
                pNumPc = document.createElement("p")
                if (result[i].type == 1) {
                    pNumPc.innerText = "VIP номер " + pcNumber
                } else {
                    pNumPc.innerText = "Номер " + pcNumber
                }

                div.appendChild(pNumPc)
                pTimePc = document.createElement("p")
                pTimePc.innerText = timeStart + "-" + timeEnd
                div.appendChild(pTimePc)
                pDatePc = document.createElement("p")
                pDatePc.innerText = date
                div.appendChild(pDatePc)

                console.log(div)



                mainDiv = document.querySelector(".auth__main__mainBlock__history")
                mainDiv.appendChild(div)

            }


        }

        allInfoAppointment()




        userExit = document.querySelectorAll(".userExit")
        userExit[0].addEventListener("click", () => {
            localStorage.clear()
        })
        userExit[1].addEventListener("click", () => {
            localStorage.clear()
        })
    </script>

</body>

</html>