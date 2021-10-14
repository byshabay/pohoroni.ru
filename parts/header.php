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
    <link defer rel="stylesheet" href="<?= $root_url ?>styles/style.css">

    <!-- FANCYBOX -->
    <!-- эти стили подлючаются к главной, контакты -->
    <link defer rel="stylesheet" href="<?= $root_url ?>styles/fancybox.css">


    <!-- JQUERY  -->
    <script defer src="<?= $root_url ?>scripts/jquery.js"></script>

    <!-- MAP -->
    <script defer src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script defer src="<?= $root_url ?>scripts/ymaps.js"></script>

    <!-- SLICK  -->
    <!-- эти скрипты подлючаются к главной, контакты -->
    <script defer src="<?= $root_url ?>scripts/slick.min.js"></script>
    <script defer src="<?= $root_url ?>scripts/slider.js"></script>

    <!-- FANCY BOX -->
    <!-- эти скрипты подлючаются к главной, контакты -->
    <script defer src="<?= $root_url ?>scripts/fancybox.umd.js"></script>

    <!-- SELF-WRITTEN SCRIPTS -->
    <script defer src="<?= $root_url ?>scripts/script.js"></script>

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
                <div class="logo">
                    <a href="<?= $root_url ?>"><img src="<?= $root_url ?>images/logo.svg" alt="Логотип pohoroni.ru"></a>
                    <div>
                        <a href="<?= $root_url ?>">
                            Ритуальные <br class="mobile-br"> Услуги <br> Москвы
                        </a>
                    </div>
                </div>


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

                <a data-fancybox data-src="#call-request-popup" class="common-border-button header__button order-popup call-request-popup">
                    Заказать звонок
                </a>



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
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/reviews-page.php">Отзывы</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/licenses.php">Лицензии</a>
                            </li>
                            <li class="menu__sub-menu-item">
                                <a href="<?= $root_url ?>pages/qa.php">Вопросы и ответы</a>
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
                    <li class="menu__item menu__item_parent catalog"><a href="<?= $root_url ?>pages/products.php">Ритуальные товары</a>
                        <!-- 2.1.SUBMENU START -->

                        <ul class="menu__sub-menu">
                            <li class="menu__sub-menu-item  menu__sub-menu-parent">
                                <a class="coffins" href="<?= $root_url ?>pages/products.php">Гробы</a>

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
                            <li class="menu__sub-menu-item  menu__sub-menu-parent">
                                <a class="wreath" href="<?= $root_url ?>pages/products.php">Венки</a>

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
                            <li class="menu__sub-menu-item  menu__sub-menu-parent">
                                <a class="textile" href="<?= $root_url ?>pages/products.php">Текстиль</a>

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

                            <li class="menu__sub-menu-item  menu__sub-menu-parent">
                                <a class="crosses" href="<?= $root_url ?>pages/products.php">Кресты</a>

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
                            <li class="menu__sub-menu-item  menu__sub-menu-parent">
                                <a class="accessories" href="<?= $root_url ?>pages/products.php">Аксессуары</a>

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
                        </ul>

                        <!-- 2.1.SUBMENU END  -->
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
        <?php
        include('../parts/agent-call-popup.php');
        include('parts/agent-call-popup.php');

        // 3.1.REQUEST CALL POPUP START
        include('../parts/call-requerst-popup.php');
        include('parts/call-requerst-popup.php');
        // 3.1.REQUEST CALL POPUP END

        // 1.1.CALCULATE THE COST POPUP START
        include('../parts/calculate-the-cost.php');
        include('parts/calculate-the-cost.php');
        //1.1.CALCULATE THE COST POPUP END
        ?>
        <!-- 3.ORDER CALL POPUP END-->

        <!-- 3.REVIEW POPUP START-->
        <?php include('../parts/review-popup.php') ?>
        <!-- 3.REVIEW POPUP END-->


    </header>
    <!-- 4.BLACKOUT START -->
    <div class="blackout">

    </div>
    <!-- 4.BLACKOUT END -->