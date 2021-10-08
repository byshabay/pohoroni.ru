<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->

<main class="simple-service main page">

    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root_url ?>">Главная</a></li>
        <li class="bread-crumbs__item"><a href="<?= $root_url ?>pages/about.php">О компании</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root_url ?>pages/simple-service.php">Оформление документов</a></li>
    </ul>

    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.SHORT INFO START -->

    <section class="short-info container">
        <img src="../images/simple-service-img.png">
        <div class="short-info__info-box">
            <h1 class="short-info__h2 common-h2">
                Оформление документов после смерти
            </h1>
            <p class="common-p">
                Потеря близкого человека всегда становится тяжелым ударом для родственников. На их плечи ложится печальное бремя хлопот, связанных с организацией похорон, оформлением документов и т. п. И все это необходимо сделать в первые несколько дней. Хорошим решением будет передать часть забот, связанных с подготовкой необходимой документации, в ритуальную службу.
            </p>
            <table class="short-info__items">
                <tr>
                    <td class="short-info__item-name">
                        Сроки:
                    </td>

                    <td class="short-info__item-value">
                        от 2 рабочих дней
                    </td>
                </tr>

                <tr>
                    <td class="short-info__item-name">
                        Цена:
                    </td>

                    <td class="short-info__item-value">
                        от 500 р
                    </td>
                </tr>
            </table>

            <a href="#" class="short-info__btn common-btn_peach">
                Рассчитать стоимость
            </a>
        </div>
    </section>

    <!-- 2.2.SHORT INFO END -->

    <!-- 2.3.FULL INFO START -->

    <section class="full-info container">
        <div class="common-h2 full-info__h2">
            Что включает процедура оформления документов:
        </div>
        <div class="full-info__info-boxes">

            <div class="full-info__info-box">
                <p class="common-p full-info__p">
                    После смерти близкого человека родственникам будет необходимо вызвать наряд полиции и скорую помощь. Они выдадут справки (протокол осмотра тела и справка констатации смерти), необходимые для получения свидетельства о смерти. Эти бумаги оформляются непосредственно по приезду и предоставляются родственникам умершего.
                </p>
                <p class="common-p full-info__p">
                    Далее нужно собрать пакет документов для предъявления в морг (поликлинику):
                </p>
                <ol class="common-ol full-info__list">
                    <li>справку констатации смерти;</li>
                    <li>протокол осмотра тела;</li>
                    <li>паспорт совершеннолетнего умершего или свидетельство о рождении ребенка;</li>
                    <li>медицинский полис и медицинскую карту усопшего.</li>
                </ol>
            </div>

            <div class="full-info__info-box">
                <p class="common-p full-info__p">При предъявлении всех перечисленных документов в морге выдадут медицинское свидетельство о смерти, которое необходимо для регистрации в отделе ЗАГС. Отметим, что данное учреждение должно относиться к району прописки скончавшегося. Свидетельство о смерти оформляется сотрудником отдела ЗАГС при предъявлении заявителем соответствующего документа — паспорта. При этом паспорт умершего совершеннолетнего гражданина РФ не возвращается, а иностранный паспорт и свидетельство о рождении (в случае, если несчастье произошло с несовершеннолетним) отдаются обратно.</p>
                <p class="common-p full-info__p">Следует отметить, что если смерть близкого человека наступила в медицинском учреждении, то процедура сбора документов несколько меняется. Однако вам не стоит беспокоиться о сложностях подобного процесса в случае, если вы обратились за помощью в специальное учреждение — специалисты ритуальной службы подробно проконсультируют или же возьмут на себя все хлопоты с оформлением необходимых бумаг.</p>
            </div>

        </div>
    </section>

    <!-- 2.3.FULL INFO END -->

    <!-- 2.4.HAVE A QUESTION START -->

    <?php include('../parts/have-a-question.php') ?>

    <!-- 2.4.HAVE A QUESTION END -->

    <!-- 2.5.HOW OUR COMPANY WORK START-->

    <section class="procedure container">
        <div class="procedure__info-box">
            <div class="procedure__h2 common-h2">
                Как работает наша компания
            </div>
            <p class="common-p procedure__p">
                Мы предлагаем огромный комплекс услуг, включающий оформление документов о смерти. Первые дни после смерти близкого — самые трудные для родственников умершего. Мы понимаем, насколько важна поддержка в этот печальный момент, поэтому готовы предложить свою помощь в сборе и оформлении необходимой документации. Большой опыт и четкая организация позволяют нам деликатно выполнять все поручения, не отвлекая лишний раз родственников умершего. Вся процедура производится согласно законодательству РФ.
            </p>
        </div>

        <!-- 2.5.1.SLIDER START -->

        <?php include('../parts/small-slider.php') ?>

        <!-- 2.5.1.SLIDER END -->
    </section>

    <!-- 2.5.HOW OUR COMPANY WORK END-->

    <!-- 2.6.BENEFITS START -->

    <?php include('../parts/benefits.php') ?>

    <!-- 2.6.BENEFITS END -->

    <!-- 2.7.MINI HELP BANNER START -->

    <?php include("../parts/help-banner.php") ?>

    <!-- 2.7.MINI HELP BANNER END -->

    <!-- 2.8.PRICES START -->

    <?php include('../parts/tariffs.php') ?>

    <!-- 2.8.PRICES END -->

    <!-- 2.9.REVIEWS START -->

    <?php include('../parts/reviews.php') ?>

    <!-- 2.9.REVIEWS END -->

    <!-- 2.10.CONTACT START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.10.CONTSCT END -->

</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->
<?php
include('../parts/footer.php')
?>
<!-- 3.FOOTER END -->