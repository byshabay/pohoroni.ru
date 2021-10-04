<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="contact-page main page">
    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Главная</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root__url ?>pages/contact.php">Контакты</a></li>
    </ul>
    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.CONTACTS START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.2.CONTACTS END -->

    <!-- 2.3.RECEPTION START -->

    <section class="reception container">
        <h1 class="common-h2 reception__h1">
            Пункты приема населения
        </h1>
        <div class="reception__info-box">
            <div class="reception__text-block">
                <div class="common-p reception__p">С учётом сложившейся международной обстановки, консультация с широким активом прекрасно подходит для реализации прогресса профессионального сообщества. С другой стороны, повышение уровня гражданского сознания прекрасно подходит для реализации дальнейших направлений развития.</div>
                <div class="common-p reception__p">Адреса для посещения:</div>

                <ul class="reception__addresses">
                    <li>
                        <img src="../images/place.png">
                        <div class="common-p reception__addresses-p">
                            Москва, Тарный проезд, 2, стр. 6.
                            <div class="reception__type">Магазин</div>
                        </div>
                    </li>

                    <li>
                        <img src="../images/place.png">
                        <div class="common-p reception__addresses-p">
                            Москва, Тарный проезд, 2, стр. 6.
                            <div class="reception__type">Офис</div>
                        </div>
                    </li>

                    <li>
                        <img src="../images/sawmill.png">
                        <div class="common-p reception__addresses-p">
                            Москва, Тарный проезд, 2, стр. 6.
                            <div class="reception__type">Производство</div>
                        </div>
                    </li>

                    <li>
                        <img src="../images/workshop.png">
                        <div class="common-p reception__addresses-p">
                            Солнечногорский район, поселок Майдарово
                            <div class="reception__type">Мастерская памятников</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="reception-control common-info-box_border">
                <img src="../images/reception-phone.png">
                <div class="common-h2 reception__h2">
                    Центральная диспетчерская служба
                </div>
                <div class="common-p reception__control-p">
                    Выезд ритуального агента полностью
                    <span class="reception__p_bold">бесплатный</span> и возможен
                    <span class="reception__p_bold">в любое время суток</span>
                </div>

                <div class="reception__phone-block">
                    <p class="common-mini-p reception__mini-text">круглостуочная линия</p>
                    <a class="reception__phone" href="tel:+78007759982">8 (800) 775-99-82</a>
                    <p class="common-mini-p reception__mini-text">бесплатный звонок по РФ</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2.3.RECEPTION END -->

    <!-- 2.4.HAVE A QUESTION START -->

    <?php include('../parts/have-a-question.php') ?>

    <!-- 2.4.HAVE A QUESTION END -->

</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->

<div class="contact-page__footer">
    <?php
    include('../parts/footer.php')
    ?>
</div>

<!-- 3.FOOTER END -->