<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="licenses-page main page">
    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Главная</a></li>
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Полезные материалы</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root__url ?>pages/licenses.php">Лицензии и сертификаты</a></li>
    </ul>
    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.INFO BLOCK START -->

    <section class="licenses-block container">
        <h1 class="common-h1 licenses-block__h1">
            Лицензии и сертификаты
        </h1>
        <div class="licenses-block__info-box">
            <div class="licenses-block__text-box">
                <p class="common-p licenses-block__p">
                    Городская служба «РИТУАЛ» осуществляет свою деятельность на основании Федерального закона от 12.01.1996 г. №8-ФЗ «О погребении и похоронном деле» ( с изменениями и дополнениями ) , Закона г. Москвы от 04.06.1997 г. №11 «О погребении и похоронном деле в г. Москве» , ред. от 07.05.2014 г. , Постановления Правительства Москвы от 08.04.2008 г. №260-ПП «О состоянии и мерах по улучшению похоронного обслуживания в городе Москве» , ( с изменениями и дополнениями ).
                </p>
                <p class="common-p licenses-block__p">
                    Городская служба «РИТУАЛ» прошла систему добровольной сертификации РОССТАНДАРТ и соответствует ГОСТ Р 54611-2011 , ГОСТ 32609-2014 , ГОСТ 32610-2014 .
                </p>
            </div>
            <div class="what-price__calculate">
                <img class="what-price__calculate-img" src="../images/certificate_white.png">
                <div class="common-h3">
                    Серетфицированные специалисты готовы оказать вам помощь в самый слодный для вас день </div>
            </div>
        </div>
    </section>

    <!-- 2.2.INFO BLOCK END -->

    <!-- 2.3.LICENSES SLIDER START -->

    <?php include('../parts/licenses.php') ?>

    <!-- 2.3.LICENSES SLIDER END -->

    <!-- 2.4.CONTACTS START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.4.CONTACTS END -->


    <!-- 3.FOOTER START -->

    <?php
    include('../parts/footer.php')
    ?>

    <!-- 3.FOOTER END -->