<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/pcSelection.css') }}">
</head>

<body>
    <div class="pcSelection__block__reservation__fon"></div>
    <div class="pcSelection__block__reservation__info">
        <div class="pcSelection__block__reservation__info__text"></div>
    </div>
    <div class="pcSelection__block__reservation__info__text__h1">
        <h1 class="pcSelection__block__reservation__info__text__h1__text">Бронь оформлена!<br>Реквизиты по брони мы отправили вам на почту</h1>
    </div>

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
                    <button class="reservation__block__specifications__info__text__main__button">Забронировать</button>
                </div>
            </div>
        </div>
    </div>
    <section class="pcSelection">

    </section>


    <script>
        token = localStorage.getItem('token')
        console.log(token)
        if (token) {
            headerProfile = document.querySelector(".pcSelection")
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
         <div class="pcSelection__main">
            <div class="pcSelection__main__select">
                <div class="pcSelection__main__select__map">
                    <div class="pcSelection__main__select__map__first__line">
                        <div class="pcSelection__main__select__map__first__line__room">
                            <div class="pcSelection__main__select__map__first__line__room__center">
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="pcSelection__main__select__map__first__line__room">
                            <div class="pcSelection__main__select__map__first__line__room__center">
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pcSelection__main__select__map__second__line">
                        <div class="pcSelection__main__select__map__second__line__top">
                            <div class="pcSelection__main__select__map__second__line__top__center">
                                <div class="pcSelection__main__select__map__second__line__top__center__block"></div>
                                <h1>Вы можете нажать на компьютер и выбрать его для брони</h1>
                            </div>
                        </div>
                        <div class="pcSelection__main__select__map__second__line__bottom">
                            <div class="pcSelection__main__select__map__second__line__bottom__left__block">
                                <div class="pcSelection__main__select__map__second__line__bottom__left__block__all_pc">
                                    <div class="pcSelection__main__select__map__second__line__bottom__left__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div class="pcSelection__main__select__map__second__line__bottom__left__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div id="stick" class="pcSelection__main__select__map__second__line__bottom__left__block__pc pcBlock">
                                        <img src="{{ asset('img/Vector 14 (1).png') }}" alt="">
                                        <img id="fon" src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div id="redPc" class="pcSelection__main__select__map__second__line__bottom__left__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pcSelection__main__select__map__second__line__bottom__right">
                                <div class="pcSelection__main__select__map__second__line__bottom__right__block">
                                    <div class="pcSelection__main__select__map__second__line__bottom__right__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div class="pcSelection__main__select__map__second__line__bottom__right__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div class="pcSelection__main__select__map__second__line__bottom__right__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div class="pcSelection__main__select__map__second__line__bottom__right__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pcSelection__main__info">
            <div class="pcSelection__main__info__imgBlock">
                <img src="{{ asset('img/Group 8.png') }}" alt="" class="pcSelection__main__info__imgBlock__img">
            </div>

        </div>
        <div class="pcSelection__main__info__blockText">
            <div class="pcSelection__main__info__blockText__item">
                <div class="pcSelection__main__info__blockText__item__blockColor__green"></div>
                <img src="{{ asset('img/Arrow 1.png') }}" alt="" class="pcSelection__main__info__blockText__item__img">
                <p class="pcSelection__main__info__blockText__item__text">Свободно</p>
            </div>
            <div class="pcSelection__main__info__blockText__item">
                <div class="pcSelection__main__info__blockText__item__blockColor__red"></div>
                <img src="{{ asset('img/Arrow 1.png') }}" alt="" class="pcSelection__main__info__blockText__item__img">
                <p class="pcSelection__main__info__blockText__item__text">Занято</p>
            </div>
            <div class="pcSelection__main__info__blockText__item">
                <div class="pcSelection__main__info__blockText__item__blockColor__blue"></div>
                <img src="{{ asset('img/Arrow 1.png') }}" alt="" class="pcSelection__main__info__blockText__item__img">
                <p class="pcSelection__main__info__blockText__item__text">Стойка регистрации</p>
            </div>
        </div>`
            console.log(headerProfile)
        } else {
            headerProfile = document.querySelector(".pcSelection")
            headerProfile.innerHTML = ` <div class="pcSelection__header__mobile">
            <div class="pcSelection__header__logo__mobile">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="pcSelection__header__logo__img">
            </div>
            <div class="pcSelection__header__menu__mobile">
                <a href="http://127.0.0.1:8000/" class="pcSelection__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="pcSelection__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="pcSelection__header__menu__link">О нас</a>
            </div>
            <div class="pcSelection__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="pcSelection__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="pcSelection__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        <div class="pcSelection__header">
            <div class="pcSelection__header__menu">
                <a href="http://127.0.0.1:8000/" class="pcSelection__header__menu__link">Главная</a>
                <a href="http://127.0.0.1:8000/reservation" class="pcSelection__header__menu__link">Бронирование</a>
                <a href="http://127.0.0.1:8000/aboutUs" class="pcSelection__header__menu__link">О нас</a>
            </div>
            <div class="pcSelection__header__logo">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="pcSelection__header__logo__img">
            </div>
            <div class="pcSelection__header__register__auth">
                <a href="http://127.0.0.1:8000/registration" class="pcSelection__header__register__auth__link">Регистрация</a>
                <a href="http://127.0.0.1:8000/authorization" class="pcSelection__header__register__auth__link">Авторизация</a>
            </div>
        </div>
        <div class="pcSelection__main">
            <div class="pcSelection__main__select">
                <div class="pcSelection__main__select__map">
                    <div class="pcSelection__main__select__map__first__line">
                        <div class="pcSelection__main__select__map__first__line__room">
                            <div class="pcSelection__main__select__map__first__line__room__center">
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="pcSelection__main__select__map__first__line__room">
                            <div class="pcSelection__main__select__map__first__line__room__center">
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                                <div class="pcSelection__main__select__map__first__line__room__center__pc pcBlock">
                                    <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pcSelection__main__select__map__second__line">
                        <div class="pcSelection__main__select__map__second__line__top">
                            <div class="pcSelection__main__select__map__second__line__top__center">
                                <div class="pcSelection__main__select__map__second__line__top__center__block"></div>
                                <h1>Вы можете нажать на компьютер и выбрать его для брони</h1>
                            </div>
                        </div>
                        <div class="pcSelection__main__select__map__second__line__bottom">
                            <div class="pcSelection__main__select__map__second__line__bottom__left__block">
                                <div class="pcSelection__main__select__map__second__line__bottom__left__block__all_pc">
                                    <div class="pcSelection__main__select__map__second__line__bottom__left__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div class="pcSelection__main__select__map__second__line__bottom__left__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div id="stick" class="pcSelection__main__select__map__second__line__bottom__left__block__pc pcBlock">
                                        <img src="{{ asset('img/Vector 14 (1).png') }}" alt="">
                                        <img id="fon" src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div id="redPc" class="pcSelection__main__select__map__second__line__bottom__left__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pcSelection__main__select__map__second__line__bottom__right">
                                <div class="pcSelection__main__select__map__second__line__bottom__right__block">
                                    <div class="pcSelection__main__select__map__second__line__bottom__right__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div class="pcSelection__main__select__map__second__line__bottom__right__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div class="pcSelection__main__select__map__second__line__bottom__right__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                    <div class="pcSelection__main__select__map__second__line__bottom__right__block__pc pcBlock">
                                        <img src="{{ asset('img/free-icon-computer-3517288 (3) 4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pcSelection__main__info">
            <div class="pcSelection__main__info__imgBlock">
                <img src="{{ asset('img/Group 8.png') }}" alt="" class="pcSelection__main__info__imgBlock__img">
            </div>

        </div>
        <div class="pcSelection__main__info__blockText">
            <div class="pcSelection__main__info__blockText__item">
                <div class="pcSelection__main__info__blockText__item__blockColor__green"></div>
                <img src="{{ asset('img/Arrow 1.png') }}" alt="" class="pcSelection__main__info__blockText__item__img">
                <p class="pcSelection__main__info__blockText__item__text">Свободно</p>
            </div>
            <div class="pcSelection__main__info__blockText__item">
                <div class="pcSelection__main__info__blockText__item__blockColor__red"></div>
                <img src="{{ asset('img/Arrow 1.png') }}" alt="" class="pcSelection__main__info__blockText__item__img">
                <p class="pcSelection__main__info__blockText__item__text">Занято</p>
            </div>
            <div class="pcSelection__main__info__blockText__item">
                <div class="pcSelection__main__info__blockText__item__blockColor__blue"></div>
                <img src="{{ asset('img/Arrow 1.png') }}" alt="" class="pcSelection__main__info__blockText__item__img">
                <p class="pcSelection__main__info__blockText__item__text">Стойка регистрации</p>
            </div>
        </div>`
            console.log(headerProfile)
        }










        async function fetchBookingAPC() {
            date = new Date()
            start_time = localStorage.getItem('start_time').replace('-', '')
            end_time = localStorage.getItem('end_time').replace('-', '')
            email = localStorage.getItem("email")

            if (+start_time.substr(0, 2) > 18 && +end_time.substr(0, 2) < 22) {
                let user = {
                    start_time: date.getMonth() < 10 ? `${date.getFullYear()}-0${date.getMonth()+1}-${date.getDate() < 10 ? "0" + date.getDate() : date.getDate()} ${start_time}:00.000000` : `${date.getFullYear()}-${date.getMonth()+1}-${date.getDate()} ${start_time}:00.000000`,
                    end_time: date.getMonth() < 10 ? `${date.getFullYear()}-0${date.getMonth()+1}-${(+date.getDate()+1) < 10 ? "0" + (+date.getDate()+1) : date.getDate()+1} ${end_time}:00.000000` : `${date.getFullYear()}-${date.getMonth()+1}-${(+date.getDate()+1)} ${end_time}:00.000000`,
                    type: 1
                }

                let response = await fetch('http://127.0.0.1:8000/api/allInfoTime', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8'
                    },
                    body: JSON.stringify(user)
                });

                let result = await response.json();
                console.log(result)
                allButtonOpenModalWindowReservation = document.querySelectorAll(".pcBlock")
                for (i = 0; i < allButtonOpenModalWindowReservation.length; i++) {
                    for (j = 0; j < result['array_pc'].length; j++) {
                        if (i == result['array_pc'][j]) {
                            allButtonOpenModalWindowReservation[i].children[0].setAttribute("src", "{{ asset('img/free-icon-computer-3517288 (4) 9.png') }}");
                        }
                    }
                }
            } else {
                let user = {
                    start_time: date.getMonth() < 10 ? `${date.getFullYear()}-0${date.getMonth()+1}-${date.getDate() < 10 ? "0" + date.getDate() : date.getDate()} ${start_time}:00.000000` : `${date.getFullYear()}-${date.getMonth()+1}-${date.getDate()} ${start_time}:00.000000`,
                    end_time: date.getMonth() < 10 ? `${date.getFullYear()}-0${date.getMonth()+1}-${date.getDate() < 10 ? "0" + date.getDate() : date.getDate()} ${end_time}:00.000000` : `${date.getFullYear()}-${date.getMonth()+1}-${date.getDate()} ${end_time}:00.000000`,
                    type: 1
                };

                let response = await fetch('http://127.0.0.1:8000/api/allInfoTime', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8'
                    },
                    body: JSON.stringify(user)
                });

                let result = await response.json();
                console.log(result)
                allButtonOpenModalWindowReservation = document.querySelectorAll(".pcBlock")
                for (i = 0; i < allButtonOpenModalWindowReservation.length; i++) {
                    for (j = 0; j < result['array_pc'].length; j++) {
                        if (i == result['array_pc'][j]) {
                            allButtonOpenModalWindowReservation[i].children[0].setAttribute("src", "{{ asset('img/free-icon-computer-3517288 (4) 9.png') }}");
                        }
                    }
                }
            }


        }

        fetchBookingAPC()

        exit = document.querySelector(".reservation__block__specifications__info__exit__img")
        exit.addEventListener("click", () => {
            allDivModalWindowReservation = document.querySelectorAll(".reservation__block__specifications__info__text__main__text")
            for (item of allDivModalWindowReservation) {
                item.remove()
            }
            modalWindowReservation = document.querySelector(".reservation__block__specifications")
            modalWindowReservation.style.display = "none"
        })

        allButtonOpenModalWindowReservation = document.querySelectorAll(".pcBlock")
        for (i = 0; i < allButtonOpenModalWindowReservation.length; i++) {
            f = async function(i) {
                if (allButtonOpenModalWindowReservation[i].children[0].getAttribute("src") == "{{ asset('img/free-icon-computer-3517288 (4) 9.png') }}") {
                    h1Modal = document.querySelector(".reservation__block__specifications__info__text__title__h1")
                    h1Modal.innerText = "Занято"
                    h1NumModal = document.querySelector(".reservation__block__specifications__info__title__center__title")
                    h1NumModal.innerText = "Компьютер №" + (+i + 1)
                } else {
                    h1Modal = document.querySelector(".reservation__block__specifications__info__text__title__h1")
                    h1Modal.innerText = "Свободно"
                    h1NumModal = document.querySelector(".reservation__block__specifications__info__title__center__title")
                    h1NumModal.innerText = "Компьютер №" + (+i + 1)


                    funcPost = async function(i) {
                        token = localStorage.getItem('token')
                        userId = localStorage.getItem('userId')


                        if (token) {
                            console.log(123)
                            start_time = localStorage.getItem('start_time').replace('-', '')
                            end_time = localStorage.getItem('end_time').replace('-', '')
                            email = localStorage.getItem("email")
                            if (+start_time.substr(0, 2) > 18 && +end_time.substr(0, 2) < 22) {
                                let user = {
                                    start_time: date.getMonth() < 10 ? `${date.getFullYear()}-0${date.getMonth()+1}-${date.getDate() < 10 ? "0" + date.getDate() : date.getDate()} ${start_time}:00.000000` : `${date.getFullYear()}-${date.getMonth()+1}-${date.getDate()} ${start_time}:00.000000`,
                                    end_time: date.getMonth() < 10 ? `${date.getFullYear()}-0${date.getMonth()+1}-${(+date.getDate()+1) < 10 ? "0" + (+date.getDate()+1) : date.getDate()+1} ${end_time}:00.000000` : `${date.getFullYear()}-${date.getMonth()+1}-${(+date.getDate()+1)} ${end_time}:00.000000`,
                                    id_user: userId,
                                    pc_number: i,
                                    type: 1,
                                    email: email,
                                };

                                console.log(user)
                                let response = await fetch('http://127.0.0.1:8000/api/newAppointment', {
                                    method: 'POST',
                                    headers: {
                                        'Authorization': 'Bearer ' + token,
                                        'Content-Type': 'application/json;charset=utf-8'
                                    },
                                    body: JSON.stringify(user)
                                });

                                let result = await response.json();
                                console.log(result);
                            } else {
                                let user = {
                                    start_time: date.getMonth() < 10 ? `${date.getFullYear()}-0${date.getMonth()+1}-${date.getDate()} ${start_time}:00.000000` : `${date.getFullYear()}-${date.getMonth()+1}-${date.getDate()} ${start_time}:00.000000`,
                                    end_time: date.getMonth() < 10 ? `${date.getFullYear()}-0${date.getMonth()+1}-${date.getDate()} ${end_time}:00.000000` : `${date.getFullYear()}-${date.getMonth()+1}-${date.getDate()} ${end_time}:00.000000`,
                                    id_user: userId,
                                    pc_number: i,
                                    type: 1,
                                    email: email,
                                };

                                console.log(user)
                                let response = await fetch('http://127.0.0.1:8000/api/newAppointment', {
                                    method: 'POST',
                                    headers: {
                                        'Authorization': 'Bearer ' + token,
                                        'Content-Type': 'application/json;charset=utf-8'
                                    },
                                    body: JSON.stringify(user)
                                });

                                let result = await response.json();
                                console.log(result);
                            }




                        }

                    }

                    newFuncPost = funcPost.bind(i, i)
                    buttonReservation = document.querySelector(".reservation__block__specifications__info__text__main__button")
                    buttonReservation.addEventListener("click", newFuncPost)
                }

                reservationBlockTextModalWindow = document.querySelector(".reservation__block__specifications__info__text__main")

                modalWindowReservation = document.querySelector(".reservation__block__specifications")
                modalWindowReservation.style.display = "flex";
                modalWindowReservationStatus = document.querySelector(".reservation__block__specifications__info__text__title__h1")





            }
            newFunc = f.bind(i, i)



            modalWindowReservation = document.querySelector(".reservation__block__specifications")




            allButtonOpenModalWindowReservation[i].addEventListener("click", newFunc)


        }

        buttonReservation = document.querySelector(".reservation__block__specifications__info__text__main__button")
        buttonReservation.addEventListener("click", () => {

                fon = document.querySelector(".pcSelection__block__reservation__fon")
                info = document.querySelector(".pcSelection__block__reservation__info")
                info_text = document.querySelector(".pcSelection__block__reservation__info__text__h1")
                info_text_h1 = document.querySelector(".pcSelection__block__reservation__info__text__h1__text")
                token = localStorage.getItem('token')
                if (!token) {
                    info_text_h1.innerText = "Войдите в свой аккаунт для бронирования"

                } else if (document.querySelector(".reservation__block__specifications__info__text__title__h1").innerText == "Занято") {
                    info_text_h1.innerText = "Данный пк забронирован, выберите другой"
                }




                allDivModalWindowReservation = document.querySelectorAll(".reservation__block__specifications__info__text__main__text")
                for (item of allDivModalWindowReservation) {
                    item.remove()
                }
                modalWindowReservation = document.querySelector(".reservation__block__specifications")
                modalWindowReservation.style.display = "none"

                pc = document.querySelector("#redPc")
                pc.style.zIndex = "-1"
                fon.style.display = "flex"
                info.style.display = "flex"
                info_text.style.display = "flex"

                delay = ms => new Promise(res => setTimeout(res, ms));
                setTimeout(async () => {
                    fon = document.querySelector(".pcSelection__block__reservation__fon")
                    info = document.querySelector(".pcSelection__block__reservation__info")
                    info_text = document.querySelector(".pcSelection__block__reservation__info__text__h1")
                    await delay(1500);

                    fon.style.display = "none"
                    info.style.display = "none"
                    info_text.style.display = "none"
                    pc = document.querySelector("#redPc")
                    pc.style.zIndex = "0"

                }, 1500)

                if (info_text_h1.innerText == "Данный пк забронирован, выберите другой" || info_text_h1.innerText == "Войдите в свой аккаунт для бронирования") {

                } else {
                    setTimeout(() => window.location.replace("http://127.0.0.1:8000/auth"), 1500);
                }

            }

        )




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