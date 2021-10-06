<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="qa-page main page">

    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Главная</a></li>
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Полезные материалы</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root__url ?>pages/qa.php">Вопросы и ответы</a></li>
    </ul>
    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.QA BLOCK START -->
    <div class="common-h1 qa__h1 container">
        Вопросы и ответы
    </div>
    <section class="common-square-wrapper container">
        <ul class="common-square-tabs">
            <li class="common-square-tab">
                <a href="#question1">Важная информация</a>
            </li>

            <li class="common-square-tab">
                <a href="#question2">Можно ли вызвать агента на дом?</a>
            </li>

            <li class="common-square-tab common-square-tab__active-tab">
                <a href="#question3">Какую помощь оказывает ваш агент?</a>
            </li>

            <li class="common-square-tab">
                <a href="#question4">Потерян паспорт умершего, как получить свидетельство о смерти? </a>
            </li>
            <li class="common-square-tab">
                <a href="#question5">
                    Что делать если человек умер дома?</a>
            </li>
            <li class="common-square-tab">
                <a href="#question6">Нужна ли лицензия на оказание ритуальных услуг? </a>
            </li>
            <li class="common-square-tab">
                <a href="#question7">Социальные похороны</a>
            </li>
        </ul>

        <div class="common-square-content-blocks">

            <!-- 1 QUESTION -->

            <div id="question3" class="common-square-content-block common-square-tab__active-tab">
                <p class="common-p">
                    Агент оказывает следующие услуги: </p>

                <ol class="common-ol main-question__ol">
                    <li>Консультацию по организации похорон усопшего;</li>
                    <li>Сбор необходимых для похорон документов;</li>
                    <li>Приобретение ритуальных принадлежностей;</li>
                    <li>Организация катафального транспорта;</li>
                    <li>Заказ места захоронения или кремации;</li>
                    <li>Подбор зала для проведения панихиды и обряда поминания;
                    </li>
                    <li>Выполнение прочих услуг связанных с погребением;</li>
                    <li>Консультирует о льготах и возможных пособиях на погребение;</li>
                </ol>
            </div>

            <!-- 2 QUESTION -->

            <div id="question1" class="common-square-content-block">
                1
            </div>

            <!-- 3 QUESTION -->

            <div id="question2" class="common-square-content-block">
                3
            </div>

            <!-- 4 QUESTION -->

            <div id="question4" class="common-square-content-block">
                4
            </div>
            <!-- 5 QUESTION -->

            <div id="question5" class="common-square-content-block">
                5
            </div>

            <!-- 6 QUESTION -->

            <div id="question6" class="common-square-content-block">
                6
            </div>

            <!-- 7 QUESTION -->

            <div id="question7" class="common-square-content-block">
                7
            </div>
        </div>



    </section>

    <!-- 2.2.QA BLOCK END -->

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