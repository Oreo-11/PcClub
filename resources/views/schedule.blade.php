<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/schedule.css') }}">
</head>

<body>
    <section class="schedule">

        <div class="schedule__main__blocks">

        </div>
    </section>
    <script>
        token = localStorage.getItem('token')
        console.log(token)
        if (token) {
            headerProfile = document.querySelector(".schedule__main__blocks")
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
        </div>`
            console.log(headerProfile)
        } else {
            headerProfile = document.querySelector(".schedule__main__blocks")
            headerProfile.innerHTML = `  <div class="schedule__header__mobile">
            <div class="schedule__header__logo__mobile">
                <img src="{{ asset('img/Pro gameNet 1.svg') }}" alt="" class="schedule__header__logo__img">
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
        </div>`
            console.log(headerProfile)
        }

















        date = new Date();
        date = date.getHours()

        for (i = 0; i < 24; i++) {
            if (date + i >= 24) {
                time = date + i - 24;
                if (time < 10) {
                    allMainBlocks = document.querySelector(".schedule__main__blocks")


                    mainBlock = document.createElement("div")
                    mainBlock.classList.add('schedule__main__blocks__block')


                    block = document.createElement("div")
                    block.classList.add('schedule__main__blocks__block__items')

                    for (j = 1; j < 6; j++) {

                        aLink = document.createElement("a")
                        aLink.classList.add('schedule__main__blocks__block__items__item')

                        aLink.setAttribute("href", "http://127.0.0.1:8000/pcSelection/")



                        h1Link = document.createElement("h1")
                        h1Link.classList.add('schedule__main__blocks__block__items__item__h1')
                        if (time + j >= 10) {
                            h1Link.innerText = "0" + time + ":00" + "-" + (time + j) + ":" + "00"
                            h1Link.setAttribute("value", "0" + time + ":00" + "-" + (time + j) + ":" + "00")
                            aLink.appendChild(h1Link)

                            timePc = "0" + time + ":00" + "-" + (time + j) + ":" + "00"

                            f = async function(timePc) {

                                start_time = timePc.substr(0, 5)
                                end_time = timePc.substr(6)
                                localStorage.setItem("start_time", start_time)
                                localStorage.setItem("end_time", end_time)
                            }
                            newFunc = f.bind(timePc, timePc)
                            aLink.addEventListener("click", newFunc)


                        } else {
                            try {
                                h1Link.innerText = "0" + time + ":00" + "-" + "0" + (time + j) + ":" + "00"
                                h1Link.setAttribute("value", "0" + time + ":00" + "-" + "0" + (time + j) + ":" + "00")
                                aLink.appendChild(h1Link)

                                timePc = "0" + time + ":00" + "-" + "0" + (time + j) + ":" + "00"

                                f = async function(timePc) {
                                    start_time = timePc.substr(0, 5)
                                    end_time = timePc.substr(6)
                                    console.log(start_time, end_time);
                                    localStorage.setItem("start_time", start_time)
                                    localStorage.setItem("end_time", end_time)
                                }
                                newFunc = f.bind(timePc, timePc)
                                aLink.addEventListener("click", newFunc)

                            } catch ($e) {
                                console.log("popo")
                            }

                        }

                        block.appendChild(aLink)
                    }


                    blockImg = document.createElement("div")
                    blockImg.classList.add('schedule__main__blocks__block__img')


                    img = document.createElement("img")
                    img.classList.add('schedule__main__blocks__item__img__bottom')
                    img.setAttribute('src', '{{ asset("img/Group 9.png") }}')

                    blockImg.appendChild(img)


                    mainBlock.appendChild(block)
                    mainBlock.appendChild(blockImg)


                    allMainBlocks.appendChild(mainBlock)

                }

            } else {
                time = date + i

                allMainBlocks = document.querySelector(".schedule__main__blocks")


                mainBlock = document.createElement("div")
                mainBlock.classList.add('schedule__main__blocks__block')


                block = document.createElement("div")
                block.classList.add('schedule__main__blocks__block__items')

                for (j = 1; j < 6; j++) {

                    aLink = document.createElement("a")
                    aLink.classList.add('schedule__main__blocks__block__items__item')

                    aLink.setAttribute("href", "http://127.0.0.1:8000/pcSelection/")



                    h1Link = document.createElement("h1")
                    h1Link.classList.add('schedule__main__blocks__block__items__item__h1')
                    if (time + j >= 10) {
                        if (time + j >= 24) {
                            if (time >= 10) {
                                h1Link.innerText = time + ":00" + "-" + "0" + (time + j - 24) + ":" + "00"
                                timePc = time + ":00" + "-" + "0" + (time + j - 24) + ":" + "00"
                            } else {
                                h1Link.innerText = "0" + time + ":00" + "-" + "0" + (time + j - 24) + ":" + "00"
                                timePc = "0" + time + ":00" + "-" + "0" + (time + j - 24) + ":" + "00"
                            }

                        } else {
                            h1Link.innerText = time + ":00" + "-" + (time + j) + ":" + "00"
                            timePc = time + ":00" + "-" + (time + j) + ":" + "00"
                        }

                        aLink.appendChild(h1Link)



                        f = async function(timePc) {

                            start_time = timePc.substr(0, 5)
                            end_time = timePc.substr(5)
                            localStorage.setItem("start_time", start_time)
                            localStorage.setItem("end_time", end_time)
                        }
                        newFunc = f.bind(timePc, timePc)
                        aLink.addEventListener("click", newFunc)


                    } else {
                        try {
                            h1Link.innerText = "0" + time + ":00" + "-" + "0" + (time + j) + ":" + "00"
                            aLink.appendChild(h1Link)

                            timePc = "0" + time + ":00" + "-" + "0" + (time + j) + ":" + "00"

                            f = async function(timePc) {
                                start_time = timePc.substr(0, 5)
                                end_time = timePc.substr(6)
                                localStorage.setItem("start_time", start_time)
                                localStorage.setItem("end_time", end_time)
                            }
                            newFunc = f.bind(timePc, timePc)
                            aLink.addEventListener("click", newFunc)

                        } catch ($e) {
                            console.log("popo")
                        }

                    }

                    block.appendChild(aLink)
                }


                blockImg = document.createElement("div")
                blockImg.classList.add('schedule__main__blocks__block__img')


                img = document.createElement("img")
                img.classList.add('schedule__main__blocks__item__img__bottom')
                img.setAttribute('src', '{{ asset("img/Group 9.png") }}')

                blockImg.appendChild(img)


                mainBlock.appendChild(block)
                mainBlock.appendChild(blockImg)


                allMainBlocks.appendChild(mainBlock)

            } {

            }
        }


        userName = localStorage.getItem('userName')
        h1NameUserMenu = document.querySelectorAll(".userProfile")
        h1NameUserMenu[0].innerText = userName
        h1NameUserMenu[1].innerText = userName





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