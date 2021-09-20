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

    <!-- FANCYBOX -->
    <!-- эти стили подлючаются к главной -->
    <link rel="stylesheet" href="styles/fancybox.css">


    <!-- JQUERY  -->
    <script src="scripts/jquery.js"></script>

    <!-- SLICK -->
    <!-- эти скрипты подлючаются к главной -->
    <script src="scripts/slick.min.js"></script>
    <script src="scripts/slider.js"></script>

    <!-- FANCY BOX -->
    <!-- эти скрипты подлючаются к главной -->
    <script src="scripts/fancybox.umd.js"></script>

    <!-- SELF-WRITTEN SCRIPTS -->
    <script src="scripts/script.js"></script>

</head>

<body>
    <header class="header">
        <!-- 1.TOP NAVIGATION START -->
        <div class="header__top-nav">
            <div class="container">

                <!-- 1.1.BURGER START -->
                <div class="burger burger-view">
                    <span></span>
                </div>

                <!-- 1.2.BURGER END -->
                <img class="logo" src="images/logo.png" alt="Логотип pohoroni.ru">
                <div class="header__tagline">Более 1200 людей в год доверяют нам самый сложный день</div>
                <img class="header__gost" src="images/gost.png" alt="Сертификат соответсвия ГОСТ Р">
                <div class="header__phone-box">
                    <span class="header__phone-top-text">
                        круглосуточная линия
                    </span>
                    <a class="header__phone header__phone_first" href="tel:+78007759982">8 (800) 775-99-82</a>
                    <span class="header__phone-bottom-text">
                        бесплатный звонок по РФ
                    </span>
                </div>

                <a class="header__phone header__phone_second" href=" tel:+74951520545">8 (495) 152-05-45</a>

                <button class="common-border-button header__button">
                    Заказать звонок
                </button>



            </div>
        </div>
        <!-- 1.TOP NAVIGATION END -->

        <!-- 2.MAIN MENU START -->
        <section class="menu-wrapper">
            <nav class="container">
                <div class="header__phone-box">
                    <span class="header__phone-top-text">
                        круглосуточная линия
                    </span>
                    <a class="header__phone header__phone_first" href="tel:+78007759982">8 (800) 775-99-82</a>
                    <span class="header__phone-bottom-text">
                        бесплатный звонок по РФ
                    </span>
                </div>

                <a class="header__phone header__phone_second" href="tel:+74951520545">8 (495) 152-05-45</a>
                <ul class="menu">
                    <li class="menu__item menu__item_parent">
                        <a href="#">О компании</a>

                        <!-- 2.1.SUBMENU START -->

                        <ul class="menu__sub-menu">
                            <li class="menu__sub-menu-item">
                                <a href="#">Подпункт 1</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="#">Подпункт 2</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="#">Подпункт 3</a>
                            </li>


                        </ul>

                        <!-- 2.1.SUBMENU END  -->

                    </li>
                    <li class="menu__item menu__item_parent">
                        <a href="#">Услуги</a>

                        <!-- 2.1.SUBMENU START -->

                        <ul class="menu__sub-menu">
                            <li class="menu__sub-menu-item">
                                <a href="#">Подпункт 1</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="#">Подпункт 2</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="#">Подпункт 3</a>
                            </li>
                        </ul>

                        <!-- 2.1.SUBMENU END  -->
                    </li>
                    <li class="menu__item"><a href="#">Ритуальные товары</a></li>
                    <li class="menu__item"><a href="#">Стоимость похорон</a></li>
                    <li class="menu__item"><a href="#">Контакты</a></li>
                </ul>

                <form class="search">
                    <input class="search__input common-btn_white" type="text" placeholder="Поиск по сайту">
                    <button class="search__submit-btn" type="submit"></button>
                </form>

                <div class="header__tagline">Более 1200 людей в год доверяют нам самый сложный день</div>


            </nav>
        </section>
        <!-- 2.MAIN MENU END -->
    </header>
    <!-- 3.BLACKOUT START -->
    <div class="blackout">

    </div>

    <!-- 3.BLACKOUT END -->