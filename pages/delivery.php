<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="delivery main page">
    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Главная</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root__url ?>pages/delivery.php">Доставка и оплата</a></li>
    </ul>
    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.DELIVERY BLOCK START -->

    <section class="delivery-block container">
        <h1 class="common-h1 delivery-block__h1">
            Доставка и оплата
        </h1>
        <div class="delivery-block__info-box">
            <div class="delivery-block__info-box-1">
                <p class="common-p delivery-block__p">
                    Таким образом, экономическая повестка сегодняшнего дня, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для первоочередных требований. Учитывая ключевые сценарии поведения, высококачественный прототип будущего проекта говорит о возможностях вывода текущих активов.
                </p>
                <ol class="common-ol delivery-block__ol">
                    <li>
                        При сумме заказа до 4 000 рублей в пределах МКАД и 10 км от МКАД стоимость — 500 рублей.
                    </li>
                    <li>
                        При сумме заказа от 4 000 рублей в пределах от 10 до 50 км от МКАД — 1 200 рублей.
                    </li>
                    <li>
                        Для адреса, расположенного более чем в 50 км от МКАД, цена рассчитывается индивидуально при оформлении заказа.
                    </li>
                </ol>
            </div>

            <div class="delivery-block__info-box-2 ">
                <div class="delivery-block__top-block">
                    <div class="common-p delivery-block__right-p">
                        Доставка всех ритуальных товаров возможна в течение
                        <span class="delivery-block__p_bold">
                            4-х часов
                        </span> после оформления заказа!
                    </div>

                    <div class="delivery-block__box-border">
                        Служба доставки работает круглосуточно!
                    </div>
                    <div class="common-p delivery-block__right-p">
                        Если Вы хотите забрать товар самостоятельно, то Вы можете приехать в офис по адресу:
                    </div>
                </div>

                <div class="delivery-block__bottom-block">
                    <ul class="delivery-block__addresses">
                        <li class="common-p">
                            <img src="../images/place.png">
                            125284, г. Москва, Беговая улица, 24
                        </li>

                        <li class="common-p">
                            <img src="../images/clock_peach.png">
                            с 09:00 до 20:00
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 2.2.DELIVERY BLOCK END -->

    <!-- 2.3.PAYMENT METHODS START -->

    <section class="payments ">
        <div class="common-h2 payments__h2">
            Способы оплаты заказа
        </div>
        <div class="payments__wrapper">
            <ul class="payments__tabs">
                <li class="payments__tab">
                    <a href="#cash">Наличный расчет</a>
                </li>

                <li class="payments__tab">
                    <a href="#bankCard">Банковская карта</a>
                </li>

                <li class="payments__tab">
                    <a href="#electronic">Электронные платежи</a>
                </li>

                <li class="payments__tab payments__active-tab">
                    <a href="#legal-entities">Безналичный расчет
                        <div class="common-mini-p payments__mini-p">
                            (для юридических лиц).
                        </div>
                    </a>
                </li>
            </ul>

            <div class="payments__types">

                <!-- 1  TYPE -->

                <div id="legal-entities" class="payments__type payments__active-tab">
                    <p class="common-p payments__type-p">
                        После формирования заказа (через сайт, либо через менеджеров) на Ваш электронный адрес будут направлены реквизиты для перевода денежных средств.
                    </p>

                    <p class="common-p payments__type-p">
                        Получить товар либо забрать самостоятельно Вы сможете только после поступления денежных средств на р/cчет.
                    </p>
                    <a href="#" class="common-btn_peach payments__type-btn">Оплатить заказ</a>
                </div>

                <!-- 2  TYPE -->

                <div id="cash" class="payments__type">
                    1
                </div>

                <!-- 3  TYPE -->

                <div id="bankCard" class="payments__type">
                    2
                </div>

                <!-- 4 TYPE -->

                <div id="electronic" class="payments__type">
                    3
                </div>

            </div>



        </div>

    </section>

    <!-- 2.3.PAYMENT METHODS END -->

    <!-- 2.4.CONTACTS START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.4.CONTACTS END -->


</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->

<?php
include('../parts/footer.php')
?>

<!-- 3.FOOTER END -->