<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
</head>

<body>
    <div class="reservation__block__specifications">
        <div class="reservation__block__specifications__black"></div>
        <div class="reservation__block__specifications__info">
            <div class="reservation__block__specifications__info__exit">
                <img src="{{ asset('img/free-icon-close-151882 (1) 1.png') }}" alt="" class="reservation__block__specifications__info__exit__img">
            </div>
            <div class="reservation__block__specifications__info__title">
                <div class="reservation__block__specifications__info__title__left"></div>
                <div class="reservation__block__specifications__info__title__center">
                    <h1 class="reservation__block__specifications__info__title__center__title">Монитор Samsung Odyssey OLED G9</h1>
                </div>
                <div class="reservation__block__specifications__info__title__right"></div>
            </div>
            <div class="reservation__block__specifications__info__text">
                <div class="reservation__block__specifications__info__text__title">
                    <h1 class="reservation__block__specifications__info__text__title__h1">Характеристики</h1>
                </div>
                <div class="reservation__block__specifications__info__text__main">

                </div>
            </div>
        </div>
    </div>
    <section class="reservation">

    </section>

    <script>
        token = localStorage.getItem('token')
        console.log(token)
        if (token) {
            headerProfile = document.querySelector(".reservation")
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
        
        <div class="reservation__mainInfo">
            <div class="reservation__mainInfo__one">
                <div class="reservation__mainInfo__game__place__fon">
                    <div class="reservation__mainInfo__game__place__fon__div">
                        <img src="{{ asset('img/image 3.png') }}" alt="" class="reservation__mainInfo__game__place__fon__div__img"><br>
                    </div>
                </div>
                <div class="reservation__mainInfo__game__place__one__PC">
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/Моник.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/Клава.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/Мыш.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/Комп.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom">
                    <img src="{{ asset('img/Group 8.png') }}" alt="" class="reservation__mainInfo__game__place__one__bottom__img">
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom__text__div">
                    <h1 class="reservation__mainInfo__game__place__one__bottom__text__div__h1">игровое место</h1>
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom__link">
                    <a href="http://127.0.0.1:8000/schedule" class="reservation__mainInfo__game__place__one__bottom__link__a">Забронировать</a>
                </div>
            </div>
            <div class="reservation__mainInfo__two">
                <div class="reservation__mainInfo__game__place__fon__two">
                    <div class="reservation__mainInfo__game__place__fon__div">
                        <img src="{{ asset('img/image 3.png') }}" alt="" class="reservation__mainInfo__game__place__fon__div__img"><br>
                    </div>
                </div>
                <div class="reservation__mainInfo__game__place__one__PC">
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/МоникВип.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/КлаваВип.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/МышВип.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/КомпВип.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom">
                    <img src="{{ asset('img/Group 8.png') }}" alt="" class="reservation__mainInfo__game__place__one__bottom__img">
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom__text__div">
                    <h1 class="reservation__mainInfo__game__place__one__bottom__text__div__h1">VIP место</h1>
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom__link">
                    <a href="http://127.0.0.1:8000/scheduleVip" class="reservation__mainInfo__game__place__one__bottom__link__a">Забронировать</a>
                </div>
            </div>
        </div>`
            console.log(headerProfile)
        } else {
            headerProfile = document.querySelector(".reservation")
            headerProfile.innerHTML = `   <div class="reservation__header__mobile">
            <div class="reservation__header__logo__mobile">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="reservation__header__logo__img">
            </div>
            <div class="reservation__header__menu__mobile">
                <a href="http://127.0.0.1:8000/" class="reservation__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="reservation__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="reservation__header__menu__link">О нас</a>
            </div>
            <div class="reservation__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="reservation__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="reservation__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        <div class="reservation__header">
            <div class="reservation__header__menu">
                <a href="http://127.0.0.1:8000/" class="reservation__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="reservation__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="reservation__header__menu__link">О нас</a>
            </div>
            <div class="reservation__header__logo">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="reservation__header__logo__img">
            </div>
            <div class="reservation__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="reservation__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="reservation__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        
        <div class="reservation__mainInfo">
            <div class="reservation__mainInfo__one">
                <div class="reservation__mainInfo__game__place__fon">
                    <div class="reservation__mainInfo__game__place__fon__div">
                        <img src="{{ asset('img/image 3.png') }}" alt="" class="reservation__mainInfo__game__place__fon__div__img"><br>
                    </div>
                </div>
               <div class="reservation__mainInfo__game__place__one__PC">
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/Моник.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/Клава.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/Мыш.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/Комп.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom">
                    <img src="{{ asset('img/Group 8.png') }}" alt="" class="reservation__mainInfo__game__place__one__bottom__img">
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom__text__div">
                    <h1 class="reservation__mainInfo__game__place__one__bottom__text__div__h1">игровое место</h1>
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom__link">
                    <a href="http://127.0.0.1:8000/schedule" class="reservation__mainInfo__game__place__one__bottom__link__a">Забронировать</a>
                </div>
            </div>
            <div class="reservation__mainInfo__two">
                <div class="reservation__mainInfo__game__place__fon__two">
                    <div class="reservation__mainInfo__game__place__fon__div">
                        <img src="{{ asset('img/image 3.png') }}" alt="" class="reservation__mainInfo__game__place__fon__div__img"><br>
                    </div>
                </div>
                <div class="reservation__mainInfo__game__place__one__PC">
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/МоникВип.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/КлаваВип.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/МышВип.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                    <div class="reservation__mainInfo__game__place__one__PC__info">
                        <img src="{{ asset('img/КомпВип.png') }}" alt="" class="reservation__mainInfo__game__place__one__PC__info__img"><br>
                        <div class="reservation__mainInfo__game__place__one__PC__info__div">
                            <button class="reservation__mainInfo__game__place__one__PC__info__div__button">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom">
                    <img src="{{ asset('img/Group 8.png') }}" alt="" class="reservation__mainInfo__game__place__one__bottom__img">
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom__text__div">
                    <h1 class="reservation__mainInfo__game__place__one__bottom__text__div__h1">VIP место</h1>
                </div>
                <div class="reservation__mainInfo__game__place__one__bottom__link">
                    <a href="http://127.0.0.1:8000/scheduleVip" class="reservation__mainInfo__game__place__one__bottom__link__a">Забронировать</a>
                </div>
            </div>
        </div>`
            console.log(headerProfile)
        }






        exit = document.querySelector(".reservation__block__specifications__info__exit__img")
        exit.addEventListener("click", () => {
            allDivModalWindowReservation = document.querySelectorAll(".reservation__block__specifications__info__text__main__text")
            for (item of allDivModalWindowReservation) {
                item.remove()
            }
            modalWindowReservation = document.querySelector(".reservation__block__specifications")
            modalWindowReservation.style.display = "none"
        })

        allButtonOpenModalWindowReservation = document.querySelectorAll(".reservation__mainInfo__game__place__one__PC__info__div__button")
        for (i = 0; i < 4; i++) {
            f = async function(i) {
                arrayTextModalWindow = [{
                    "title": "Монитор MSI MAG 341CQP QD-OLED черный",
                    "text": 'Экран: 49 , 5120x1440, 32:9, OLED, 240 Гц, 250 кд/м2, GTG 0.03 мс, AMD FreeSync, изогнутый',
                }, {
                    "title": "Клавиатура проводная A4Tech Bloody AT87 Renegade",
                    "text": 'Клавиатура оптомеханическая проводная A4Tech Bloody AT87 Renegade бежевого цвета',
                }, {
                    "title": "Мышь проводная Logitech G403 HERO [910-005636]",
                    "text": '25600 dpi, светодиодный, USB Type-A, кнопки - 6',
                }, {
                    "title": "Системный блок",
                    "core": 'Экран: 4954 , 5120x1440, 32:9, OLED, 240 Гц, 250 кд/м2, GTG 0.03 мс, AMD FreeSync, изогнутый',
                    "video": "rtx 3070",
                    "memory": "16 gb",
                }]

                reservationBlockTextModalWindow = document.querySelector(".reservation__block__specifications__info__text__main")

                modalWindowReservation = document.querySelector(".reservation__block__specifications")
                modalWindowReservation.style.display = "flex";
                divOne = document.createElement("div")
                divOne.className = "reservation__block__specifications__info__text__main__text"
                divTwo = document.createElement("div")
                divTwo.className = "reservation__block__specifications__info__text__main__text__circle"
                p = document.createElement("p")
                p.className = "reservation__block__specifications__info__text__main__text__circle__li"
                p.innerText = arrayTextModalWindow[i]["text"]

                nameElement = document.querySelector(".reservation__block__specifications__info__title__center__title")
                nameElement.innerText = arrayTextModalWindow[i]["title"]
                if (i == 3) {
                    for (key in arrayTextModalWindow[i]) {
                        if (key == "title") {
                            continue
                        }
                        divTwo = document.createElement("div")
                        divTwo.className = "reservation__block__specifications__info__text__main__text__circle"
                        p = document.createElement("p")
                        p.className = "reservation__block__specifications__info__text__main__text__circle__li"
                        p.innerText = arrayTextModalWindow[i][key]
                        divOne.appendChild(divTwo)
                        divOne.appendChild(p)
                    }
                } else {
                    divOne.appendChild(divTwo)
                    divOne.appendChild(p)
                }


                reservationBlockTextModalWindow.appendChild(divOne)
            }

            newFunc = f.bind(i, i)
            allButtonOpenModalWindowReservation[i].addEventListener("click", newFunc)
        }



        allButtonOpenModalWindowReservation = document.querySelectorAll(".reservation__mainInfo__game__place__one__PC__info__div__button")
        for (i = 4; i < 8; i++) {
            allButtonOpenModalWindowReservation[i].innerText = "Подробнее"
            f = async function(i) {
                arrayTextModalWindow = [{
                    "title": "Дорогой монитор MSI MAG 341CQP QD-OLED черный",
                    "text": 'Экран: 49 , 5120x1440, 32:9, OLED, 240 Гц, 250 кд/м2, GTG 0.03 мс, AMD FreeSync, изогнутый',
                }, {
                    "title": "Дорогая клавиатура проводная A4Tech Bloody AT87 Renegade",
                    "text": 'Клавиатура оптомеханическая проводная A4Tech Bloody AT87 Renegade бежевого цвета',
                }, {
                    "title": "Дорогая Мышь проводная Logitech G403 HERO [910-005636]",
                    "text": '25600 dpi, светодиодный, USB Type-A, кнопки - 6',
                }, {
                    "title": "Дорогой системный блок",
                    "core": 'Экран: 4954 , 5120x1440, 32:9, OLED, 240 Гц, 250 кд/м2, GTG 0.03 мс, AMD FreeSync, изогнутый',
                    "video": "rtx 3070",
                    "memory": "32 gb",
                }]

                reservationBlockTextModalWindow = document.querySelector(".reservation__block__specifications__info__text__main")

                modalWindowReservation = document.querySelector(".reservation__block__specifications")
                modalWindowReservation.style.display = "flex";
                divOne = document.createElement("div")
                divOne.className = "reservation__block__specifications__info__text__main__text"
                divTwo = document.createElement("div")
                divTwo.className = "reservation__block__specifications__info__text__main__text__circle"
                p = document.createElement("p")
                p.className = "reservation__block__specifications__info__text__main__text__circle__li"
                p.innerText = arrayTextModalWindow[i - 4]["text"]

                nameElement = document.querySelector(".reservation__block__specifications__info__title__center__title")
                nameElement.innerText = arrayTextModalWindow[i - 4]["title"]
                console.log(i)
                if (i - 4 == 3) {
                    for (key in arrayTextModalWindow[i - 4]) {
                        if (key == "title") {
                            continue
                        }
                        divTwo = document.createElement("div")
                        divTwo.className = "reservation__block__specifications__info__text__main__text__circle"
                        p = document.createElement("p")
                        p.className = "reservation__block__specifications__info__text__main__text__circle__li"
                        p.innerText = arrayTextModalWindow[i - 4][key]
                        divOne.appendChild(divTwo)
                        divOne.appendChild(p)
                    }
                } else {
                    divOne.appendChild(divTwo)
                    divOne.appendChild(p)
                }


                reservationBlockTextModalWindow.appendChild(divOne)
            }

            newFunc = f.bind(i, i)
            allButtonOpenModalWindowReservation[i].addEventListener("click", newFunc)
        }



        userName = localStorage.getItem('userName')
        h1NameUserMenu = document.querySelectorAll(".userProfile")
        h1NameUserMenu[0].innerText = userName
        h1NameUserMenu[1].innerText = userName



        userExit = document.querySelectorAll(".userExit")
        userExit[0].addEventListener("click", () => {
            localStorage.clear()
            window.location.replace("http://127.0.0.1:8000/")
        })
        userExit[1].addEventListener("click", () => {
            localStorage.clear()
            window.location.replace("http://127.0.0.1:8000/")
        })
    </script>

</body>

</html>