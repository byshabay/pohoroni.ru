<!DOCTYPE html>
<html lang="RU">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>

    <!-- FAVICON START -->

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- FAVICON END -->

    <!-- SELF-WRITTEN STYLES -->
    <link rel="stylesheet" href="styles/style.css">

    <!-- SELF-WRITTEN SCRIPTS -->
    <script src="scripts/script.js"></script>

</head>

<body>
    <header class="header">
        <!-- 1.TOP NAVIGATION START -->
        <div class="header__top-nav">
            <div class="container">
                <img class="logo" src="images/logo.png" alt="Логотип pohoroni.ru">
                <div class="header__tagline">Более 1200 людей в год доверяют нам самый сложный день</div>
                <img src="images/gost.png" alt="Сертификат соответсвия ГОСТ Р">
                <div class="header__phone-box">
                    <span class="header__phone-top-text">
                        круглосуточная линия
                    </span>
                    <a class="header__phone header__phone_first" href="tel:+78007759982">8 (800) 775-99-82</a>
                    <span class="header__phone-bottom-text">
                        бесплатный звонок по РФ
                    </span>
                </div>

                <a class="header__phone" href="tel:+74951520545">8 (495) 152-05-45</a>

                <button class="border-button header__button">
                    Заказать звонок
                </button>
            </div>

        </div>
        <!-- 1.TOP NAVIGATION END -->

        <!-- 2.MAIN MENU START -->
        <section class="menu-wrapper">
            <nav class="container">
                <ul class="menu">
                    <li class="menu__item"><a href="#">О компании</a></li>
                    <li class="menu__item"><a href="#">Услуги</a></li>
                    <li class="menu__item"><a href="#">Ритуальные товары</a></li>
                    <li class="menu__item"><a href="#">Стоимость похорон</a></li>
                    <li class="menu__item"><a href="#">Контакты</a></li>
                </ul>

                <form class="search">
                    <input class="search__input btn_white" type="text" placeholder="Поиск по сайту">
                    <button class="search__submit-btn" type="submit"></button>
                </form>

            </nav>
        </section>
        <!-- 2.MAIN MENU END -->
    </header>