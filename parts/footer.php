<footer class="footer">
    <div class="container">

        <!-- 1.CONTACT COLUMN -->

        <ul class="footer__contacts footer__column">
            <li class="footer__contacts-item footer__logo">
                <img src="<?= $root_url ?>images/logo.svg">
                <div>Ритуальные <br> услуги <br> Москвы</div>
            </li>
            <li class="footer__contacts-item">
                <a href="tel:+74957953080">
                    <img src="<?= $root_url ?>images/tel-light.png">
                    +7 495 795 30-80
                </a>
            </li>
            <li class="footer__contacts-item">
                <a href="mailto:info@mfc-ritual.ru">
                    <img src="<?= $root_url ?>images/email-light.png">
                    info@mfc-ritual.ru
                </a>
            </li>
            <li class="footer__contacts-item fixed-call-btn">
                <a data-fancybox data-src="#call-request-popup" href="#" class="common-btn_white footer__order-btn order-popup ">
                    Заказать звонок
                </a>
            </li>
        </ul>

        <!-- 2.MENU COLUMN -->
        <ul class="footer__menu footer__column">

            <li class="footer__menu-item"><a href="#">О компании</a></li>
            <li class="footer__menu-item"><a href="#">Услуги</a></li>
            <li class="footer__menu-item"><a href="#">Ритуальные товары</a></li>
            <li class="footer__menu-item"><a href="#">Стоимость похорон</a></li>
            <li class="footer__menu-item"><a href="#">Контакты</a></li>

        </ul>

        <!-- 3.SERVICES COLUMN -->
        <div class="footer__services footer__column">
            <div class="footer__services-h2">Ритуальные услуги</div>
            <ul class="footer__services-items">
                <li class="footer__services-item"><a href="#">Вызов ритуального агента</a></li>
                <li class="footer__services-item"><a href="#">Ритуальный транспорт</a></li>
                <li class="footer__services-item"><a href="#">Организация похорон</a></li>
                <li class="footer__services-item"><a href="#">Организация кремации</a></li>
                <li class="footer__services-item"><a href="#">Груз 200</a></li>
                <li class="footer__services-item"><a href="#">Поминальная трапеза</a></li>
                <li class="footer__services-item"><a href="#">Место на кладбище</a></li>
            </ul>
        </div>

        <!-- 4.PRODUCT COLUMN -->
        <div class="footer__services footer__column">
            <div class="footer__services-h2">Ритуальные товары</div>
            <ul class="footer__services-items">
                <li class="footer__services-item"><a href="#">Гробы</a></li>
                <li class="footer__services-item"><a href="#">Венки</a></li>
                <li class="footer__services-item"><a href="#">Кресты </a></li>
                <li class="footer__services-item"><a href="#">Текстиль</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- JQUERY  -->
<script src="<?= $root_url ?>scripts/jquery.js"></script>
<script src="<?= $root_url ?>scripts/jquery.maskedinput.min.js"></script>


<!-- SLICK  -->
<!-- эти скрипты подлючаются к главной, контакты -->
<script src="<?= $root_url ?>scripts/slick.min.js"></script>
<script src="<?= $root_url ?>scripts/slider.js"></script>

<!-- FANCY BOX -->
<!-- эти скрипты подлючаются к главной, контакты -->
<script src="<?= $root_url ?>scripts/fancybox.umd.js"></script>

<!-- MAP -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="<?= $root_url ?>scripts/ymaps.js"></script>

<!-- SELF-WRITTEN SCRIPTS -->
<script src="<?= $root_url ?>scripts/script.js"></script>
</body>

</html>