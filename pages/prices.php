<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="prices-page main page">
    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root_url ?>">Главная</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root_url ?>pages/prices.php">Стоимость похорон</a></li>
    </ul>

    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.PRICES BLOCK START -->

    <section class="prices-block container">
        <h1 class="common-h1 prices-block__h1">
            Цены на ритуальные услуги
        </h1>

        <div class="prices-block__wrapper">
            <?php include('../parts/funeralAccompanyng.php') ?>
            <div class="prices-block__info-box">
                <p class="common-p prices-block__p">
                    Агенты ритуальной службы подробно расскажут вам о перечне предоставляемых нами услуг. Среди них, помимо прочего, есть похороны эконом-класса, позволяющие проводить ритуальные церемонии на подобающем уровне, не выходя за рамки скромного бюджета.
                </p>
                <p class="common-p prices-block__p">
                    Для нас нет «дешёвых» и «дорогих» похорон. Каждый план похорон — полный набор ритуальных товаров и услуг, необходимый для достойного погребения — будет выполнен качественно, с трепетным вниманием к усопшему и близким.
                </p>
                <a href="#" class="common-btn_peach prices-block__btn">
                    Расчитать стоимость
                </a>

            </div>
        </div>
    </section>

    <!-- 2.2.PRICES BLOCK END -->

    <!-- 2.3.TARIFFS START -->

    <?php include('../parts/tariffs.php') ?>

    <!-- 2.3.TARIFFS END -->

    <!-- 2.4.HAVE A QUESTION START -->

    <?php include('../parts/have-a-question.php') ?>

    <!-- 2.4.HAVE A QUESTION END -->

    <!-- 2.5.PROCEDURE START -->

    <section class="procedure container">
        <div class="procedure__info-box">
            <div class="procedure__h2 common-h2 prices-procedure-h2">
                Помощь в организации похорон
            </div>
            <p class="common-p procedure__p">
                Мы готовы полностью взять на себя организацию похорон, гарантируя высокий профессионализм и оптимальные цены. На сайте компании «Горслужба-Ритуал» размещен прайс-лист с указанием стоимости похорон и сопутствующих услуг по государственным ценам. Мы рекомендуем вам побеседовать с нашими специалистами, которые предоставят вам консультацию о том, сколько стоят похороны в Москве.
            </p>
        </div>

        <!-- 2.5.1.SLIDER START -->

        <?php include('../parts/small-slider.php') ?>

        <!-- 2.5.1.SLIDER END -->
    </section>

    <!-- 2.5.PROCEDURE END -->

    <!-- 2.6.WHY BLOCK START -->

    <?php include('../parts/why-block.php') ?>

    <!-- 2.6.WHY BLOCK END -->

    <!-- 2.7.MINI HELP BANNER START -->

    <?php include("../parts/help-banner.php") ?>

    <!-- 2.7.MINI HELP BANNER END -->

    <!-- 2.8.SERVICES START -->

    <?php include('../parts/services.php') ?>

    <!-- 2.8.SERVICES END -->

    <!-- 2.9.REVIEWS START -->

    <?php include('../parts/reviews.php') ?>

    <!-- 2.9.REVIEWS END -->

    <!-- 2.10.CONTACTS START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.10.CONTACTS END -->

</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->
<?php
include('../parts/footer.php')
?>
<!-- 3.FOOTER END -->