<!DOCTYPE html>
<html lang="RU">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>

    <?php $root_url = 'http://study.ivit.pro/pohoroni.ru/'; ?>
    <!-- FAVICON START -->

    <link rel="apple-touch-icon" sizes="180x180" href="<?= $root_url ?>images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $root_url ?>images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $root_url ?>images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= $root_url ?>images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= $root_url ?>images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?= $root_url ?>images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?= $root_url ?>images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    <!-- FAVICON END -->

    <!-- SELF-WRITTEN STYLES -->
    <link rel="stylesheet" href="<?= $root_url ?>styles/style.css">

    <!-- FANCYBOX -->
    <!-- эти стили подлючаются к главной, контакты -->
    <link rel="stylesheet" href="<?= $root_url ?>styles/fancybox.css">


    <!-- JQUERY  -->
    <script src="<?= $root_url ?>scripts/jquery.js"></script>

    <!-- MAP -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="<?= $root_url ?>scripts/ymaps.js"></script>
    <!-- SLICK  -->
    <!-- эти скрипты подлючаются к главной, контакты -->
    <script src="<?= $root_url ?>scripts/slick.min.js"></script>
    <script src="<?= $root_url ?>scripts/slider.js"></script>

    <!-- FANCY BOX -->
    <!-- эти скрипты подлючаются к главной, контакты -->
    <script src="<?= $root_url ?>scripts/fancybox.umd.js"></script>

    <!-- SELF-WRITTEN SCRIPTS -->
    <script src="<?= $root_url ?>scripts/script.js"></script>

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
                <a class="logo" href="<?= $root_url ?>">
                    <img src="<?= $root_url ?>images/logo.png" alt="Логотип pohoroni.ru">
                    <div>Ритуальные <br class="mobile-br"> Услуги <br> Москвы</div>
                </a>

                <div class="header__tagline">Более 1200 людей в год доверяют нам самый сложный день</div>
                <img class="header__gost" src="<?= $root_url ?>images/gost.png" alt="Сертификат соответсвия ГОСТ Р">
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

                <a data-fancybox data-src="#order-call" class="common-border-button header__button order-popup">
                    Заказать звонок
                </a>



            </div>
        </div>
        <!-- 1.TOP NAVIGATION END -->

        <!-- 2.MAIN MENU START -->
        <section class="menu-wrapper">
            <nav class="container">
                <a data-fancybox data-src="#order-call" class="common-btn_white header__button order-popup">
                    Заказать звонок
                </a>
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
                        <a href="<?= $root_url ?>pages/about.php">О компании</a>

                        <!-- 2.1.SUBMENU START -->

                        <ul class="menu__sub-menu">
                            <li class="menu__sub-menu-item menu__sub-menu-parent">
                                <a href="<?= $root_url ?>pages/error404.php">Ошибка 404</a>
                                <!-- 2.1.1.SUB-SUB-MENU START -->
                                <ul class="menu__sub-sub-menu">
                                    <li class="menu__sub-sub-menu-item"><a href="#">Подподпункт 1</a></li>
                                    <li class="menu__sub-sub-menu-item"><a href="#">Подподпункт 2</a></li>
                                    <li class="menu__sub-sub-menu-item"><a href="#">Подподпункт 3</a></li>
                                    <li class="menu__sub-sub-menu-item"><a href="#">Подподпункт 4</a></li>
                                    <li class="menu__sub-sub-menu-item"><a href="#">Подподпункт 5</a></li>
                                </ul>
                                <!-- 2.1.1.SUB-SUB-MENU START -->
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/delivery.php">Доставка</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/morgues.php">Морги Москвы</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/place.php">Место на кладбище</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/crematorium.php">Крематории</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/mfc.php">МФЦ</a>
                            </li>
                        </ul>

                        <!-- 2.1.SUBMENU END  -->

                    </li>
                    <li class="menu__item menu__item_parent">
                        <a href="<?= $root_url ?>pages/services.php">Услуги</a>

                        <!-- 2.1.SUBMENU START -->

                        <ul class="menu__sub-menu">
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/simple-service.php">Оформление документов</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/privacy.php">Политика конфиденциальности </a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/allowance.php">Пособие за погребение</a>
                            </li>
                        </ul>

                        <!-- 2.1.SUBMENU END  -->
                    </li>
                    <li class=" menu__item"><a href="<?= $root_url ?>pages/products.php">Ритуальные товары</a>
                    </li>
                    <li class="menu__item"><a href="<?= $root_url ?>pages/prices.php">Стоимость похорон</a></li>
                    <li class="menu__item"><a href="<?= $root_url ?>pages/contact.php">Контакты</a></li>
                </ul>

                <form class="search">
                    <input class="search__input common-btn_white" type="text" placeholder="Поиск по сайту">
                    <button class="search__submit-btn" type="submit"></button>
                </form>
            </nav>
        </section>
        <!-- 2.MAIN MENU END -->
        <!-- 3.ORDER CALL POPUP START-->
        <form id="order-call" class="common-popup-form">
            <div class="common-h2">
                Вызов ретуального агента
            </div>
            <p class="common-popup-p order-popup-p">
                С помощью данного сервиса после заполнения всех полей к Вам на указанный адрес приедет ритуальный наш агент.
            </p>
            <div class="common-popup-error">
                Введите корректные данные
            </div>
            <div class="common-popup-inputs">
                <input class="common-popup-input" type="text" name="popup-name" id="popup-name" placeholder="Ваше имя">
                <input class="common-popup-input" type="tel" name="popup-phone" id="popup-phone" placeholder="Ваш номер телефона">
                <input class="common-popup-input" type="text" name="popup-address" id="popup-address" placeholder="Ваш адрес">
                <button class="common-btn_peach popup-btn" type="submit">Отправить</button>
            </div>
            <p class="common-popup-mini-text">
                Нажимая на кнопку "Отправить", Вы соглашаетесь с правилами обработки <a href="#"> персональных данных</a>.
            </p>
        </form>
        <!-- 3.ORDER CALL POPUP END-->

    </header>
    <!-- 4.BLACKOUT START -->
    <div class="blackout">

    </div>
    <!-- 4.BLACKOUT END -->