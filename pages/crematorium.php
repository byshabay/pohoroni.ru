<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="crematorium-page main page">
    <!-- 2.1.BREAD CRUMBS START -->
    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Главная</a></li>
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Полезные материалы</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root__url ?>pages/crematorium.php">Крематории</a></li>
    </ul>

    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.CREMATORIUM BLOCK START -->

    <section class="crematorium container">

        <!-- 2.2.1.TOP INFO BLOCK START -->

        <h1 class="common-h1 crematorium__h1">Крематорий</h1>
        <div class="crematorium__info-box">
            <div class="crematorium__text-block">
                <p class="common-p crematorium__p">
                    Кремация (кремирование) человека — одна из популярных ритуальных услуг современности, с каждым годом становящаяся все более востребованной
                </p>

                <p class="common-p crematorium__bold-p">
                    Какие документы необходимы для кремации?
                </p>

                <ol class="common-ol crematorium__ol">
                    <li>Гербовое свидетельство о смерти</li>
                    <li>Паспорт лица, ответственного за захоронение</li>
                    <li>Договор о проведении кремации останков умершего и квитанция об оплате услуг крематория — выдаёт ритуальная служба</li>
                    <li>Справка «О невозражении против кремации» от следственного комитета РФ (требуется, если смерть наступила не из-за естественных причин)</li>
                </ol>
            </div>
            <ul class="crematorium__ul">
                <li class="common-p">При погребении урны с прахом в землю нужен меньший по размеру участок и расходы на копку могилы ниже</li>
                <li class="common-p">Меньше проблем и затрат в случае необходимости перевозки для захоронения на расстояние (груз 200)</li>
                <li class="common-p">Нет необходимости постоянного ухода за могилой, захоронение в колумбарии будет выглядеть ухоженно в любое время года</li>
                <li class="common-p">В сравнении с традиционными похоронами прощание с покойным в крематории морально и физически легче для близких</li>
            </ul>
        </div>

        <!-- 2.2.1.TOP INFO BLOCK END -->

        <!-- 2.2.2.BOTTOM INFO BLOCK START -->

        <div class="crematorium__types container">
            <div class="common-h2 crematorium__h2">
                Крематории Москвы
            </div>
            <div class="common-square-wrapper ">
                <ul class="common-square-tabs">
                    <li class="common-square-tab">
                        <a href="#crematorium1">Митинский</a>
                    </li>

                    <li class="common-square-tab">
                        <a href="#crematorium2">Николо-Архангельский</a>
                    </li>

                    <li class="common-square-tab common-square-tab__active-tab">
                        <a href="#crematorium3">Носовихинский</a>
                    </li>

                    <li class="common-square-tab">
                        <a href="#crematorium4">Хованский</a>
                    </li>
                </ul>

                <div class="common-square-content-blocks">

                    <!-- 1 CREMATORIUM -->

                    <div id="crematorium3" class="common-square-content-block common-square-tab__active-tab">
                        <ol class="common-ol crematorium__type-ol">
                            <li class="common-p"> пос. Митино, 6-й км Пятницкого шоссе</li>
                            <li class="common-p">М.О., Балашихинский р-н, пос. Николо-Архангельское, Носовихинское шоссе, вл. 16</li>
                            <li class="common-p">М.О., Балашихинский р-н, пос. Николо-Архангельское, Новосовихинское шоссе, вл. 16, стр 2</li>
                            <li class="common-p">М.О., Ленинский район, п/o "Мосрентген" 21 км Киевского шоссе</li>
                        </ol>
                    </div>

                    <!-- 2 CREMATORIUM -->

                    <div id="crematorium1" class="common-square-content-block">
                        1
                    </div>

                    <!-- 3 CREMATORIUM -->

                    <div id="crematorium2" class="common-square-content-block">
                        3
                    </div>

                    <!-- 4 CREMATORIUM -->

                    <div id="crematorium4" class="common-square-content-block">
                        4
                    </div>
                </div>



            </div>
        </div>

        <!-- 2.2.2.BOTTOM INFO BLOCK END -->

    </section>

    <!-- 2.2.CREMATORIUM BLOCK END -->

    <!-- 2.3.CONTACTS START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.3.CONTACTS END -->

</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->
<?php
include('../parts/footer.php')
?>
<!-- 3.FOOTER END -->