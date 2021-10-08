<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="about main page">

    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root_url ?>">Главная</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root_url ?>pages/about.php">О компании</a></li>
    </ul>

    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.ABOUT COMPANY START -->

    <section class="about-company container">
        <h1 class="common-h1">
            О компании
        </h1>
        <div class="about-company__info-box">
            <div class="about-company__text-box">
                <p class="common-p">Мы относимся к своему делу с максимальной серьезностью и не позволяем даже малейших просчетов. Наша задача - полностью оградить клиента от любых переживаний. Специалисты службы «МФЦ-Ритуал» знают, как сгладить болезненные проявления и оказать действительно качественную поддержку в непростой период жизни.</p>
                <p class="common-p">Обращение в ритуальную службу Москвы - разумный выбор для каждого, кому приходится столкнуться с тяжелой потерей. Мы предлагаем высокое качество услуг и всесторонний подход по умеренным и полностью обоснованным ценам.</p>
                <p class="common-p">В этом разделе вы найдете ключевую информацию о городской ритуальной службе МФЦ-Ритуал. Познакомившись с ней, вы сможете сделать осознанный выбор.</p>
            </div>
            <img src="../images/about-company-img.png">
        </div>
    </section>

    <!-- 2.2.ABOUT COMPANY END -->

    <!-- 2.3.WHY OUR COMPANY START -->

    <section class="why-our-company common-mini-banner">
        <div class="container">
            <div class="common-h2 why-our-company__h2">
                Почему наше
                ритуальное агентство?
            </div>
            <div class="common-p why-our-company__p">
                Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: сплочённость команды профессионалов влечет за собой процесс внедрения и модернизации глубокомысленных рассуждений.
            </div>

        </div>
    </section>

    <!-- 2.3.WHY OUR COMPANY END -->

    <!-- 2.4.BENEFITS START -->

    <?php include('../parts/benefits.php') ?>

    <!-- 2.4.BENEFITS END -->

    <!-- 2.5.LICENSES START -->

    <?php include("../parts/licenses.php") ?>

    <!-- 2.5.LICENSES END -->

    <!-- 2.6.SERVICES START -->

    <?php include('../parts/services.php') ?>

    <!-- 2.6.SERVICES END -->

    <!-- 2.7.OUR EMPLOYEES START -->

    <section class="employees container">
        <div class="common-h2 employees__h2">
            Наши сотрудники
        </div>
        <div class="employees__info-box">
            <div class="employees__text-box">
                <p class="common-p employees__p">
                    Каждый работник со всей ответственностью относится к возложенным на него обязательствам, понимая и осознавая всю серьезность мероприятия. Профессиональные менеджеры грамотно и деликатно работают с клиентами, пытаясь в самые сложные моменты их жизни в индивидуальном порядке выполнить все пожелания и требования.
                </p>

                <p class="common-p employees__p">
                    Каждый работник со всей ответственностью относится к возложенным на него обязательствам, понимая и осознавая всю серьезность мероприятия. Профессиональные менеджеры грамотно и деликатно работают с клиентами, пытаясь в самые сложные моменты их жизни в индивидуальном порядке выполнить все пожелания и требования.
                </p>
            </div>

            <div class="employees__order-box">
                <img src="../images/businesswoman.png">
                <p class="employees__h3">
                    Одно из преимуществ сотрудничества с нами – индивидуальный подход к каждому клиенту.
                </p>
                <a data-fancybox data-src="#order-call" class=" common-btn_white employees__btn">Вызов ритуального агента</a>
            </div>
        </div>
    </section>

    <!-- 2.7.OUR EMPLOYEES END -->

    <!-- 2.8.HAVE A QUESTION START -->

    <?php include('../parts/have-a-question.php') ?>

    <!-- 2.8.HAVE A QUESTION END -->

    <!-- 2.9.CONTACT START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.9.CONTSCT END -->

</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->
<?php
include('../parts/footer.php')
?>
<!-- 3.FOOTER END -->