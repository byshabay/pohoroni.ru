<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="place-page main page">

    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Главная</a></li>
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Полезные материалы</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root__url ?>pages/place.php">Место на кладбище</a></li>
    </ul>
    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.PLACE IN THE CEMETERY START -->

    <section class="place container">
        <h1 class="common-h1 place__h1">
            Место на кладбище
        </h1>
        <div class="place__info-box">
            <div class="place__text-box">
                <p class="common-p place__p">
                    «Горслужба-Ритуал» - надёжное ритуальное агентство, которое оказывает помощь в подготовке к похоронам. Наша компания на протяжении многих лет занимается организацией траурных мероприятий. Сотрудники агентства понимают, что на родственников усопшего в эти печальные дни ложится огромная психологическая и физическая нагрузка. Мы возьмём на себя часть забот, чтобы вы смогли достойно проводить близкого человека в последний путь.
                </p>

                <p class="common-p place__p">
                    Для вашего удобства мы подготовили алфавитный список кладбищь в разных районах Москвы.
                </p>

                <a href="#" class="common-btn_peach place__btn">Открыть список</a>
            </div>
            <?php include('../parts/funeralAccompanyng.php') ?>
        </div>
    </section>

    <!-- 2.2.PLACE IN THE CEMETERY END -->

    <!-- 2.3.HOW TO BUY START -->

    <section class="how-a-buy container">
        <div class="common-h2 how-a-buy__h2">
            Как купить место на кладбище в Москве?
        </div>
        <div class="how-a-buy__wrapper">
            <div class="common-p how-a-buy__p">
                Приобретение места на кладбище входит в число основных мероприятий при организации похорон. Следует сразу оговориться, что просто так купить участок для захоронения нельзя. Российское законодательство предусматривает предоставление места на кладбище в бессрочное пользование и до тех пор, пока за ним осуществляется уход. Однако участок можно купить в комплекте с ритуальными услугами.
            </div>
            <div class="common-p how-a-buy__p">
                Важно понимать, что не все кладбища столицы доступны для захоронений. Часть из них являются закрытыми. На сайте нашего агентства представлена подробная информация о кладбищах, где можно провести погребение. Похороны на кладбище закрытого типа проводятся только после выдачи специального разрешения.
            </div>
        </div>
    </section>

    <!-- 2.3.HOW TO BUY END -->

    <!-- 2.4.HAVE A QUESTION START -->

    <?php include('../parts/have-a-question.php') ?>

    <!-- 2.4.HAVE A QUESTION END -->

    <!-- 2.5.WHAT IS THE PRICE START -->

    <section class="what-price container">
        <div class="common-h2 what-price__h2">
            Сколько стоит место на кладбище в Москве?
        </div>

        <div class="what-price__wrapper">
            <div class="what-price__text-box">
                <p class="common-p what-price__p">
                    Цена места на кладбище определяется целым рядом факторов: удалённость от центра Москвы, тип захоронения (родственная могила или нет), статус кладбища. В окончательную стоимость входит организация похоронных мероприятий, оформление документации и проведение похорон.
                </p>
                <p class="common-p what-price__p">
                    Специалисты нашего агентства помогут подобрать место на кладбище и рассчитают стоимость ритуальных услуг.
                </p>
            </div>

            <div class="what-price__calculate">
                <img class="what-price__calculate-img" src="../images/businesswoman.png">
                <div class="common-h3">
                    Свяжитесь с нами и мы поможем подсчитать стоимость похорон с покупкой места на кладбище
                </div>
                <a href="#" class="common-btn_white what-price__btn">
                    Расчитать стоимость
                </a>

            </div>

        </div>

    </section>

    <!-- 2.5.WHAT IS THE PRICE END -->

    <!-- 2.6.CONTACTS START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.6.CONTACTS END -->

</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->
<?php
include('../parts/footer.php')
?>

<!-- 3.FOOTER END -->