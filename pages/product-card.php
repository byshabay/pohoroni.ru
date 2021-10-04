<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="product-card main page">

    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Главная</a></li>
        <li class="bread-crumbs__item "><a href="<?= $root__url ?>pages/products.php">Ритуальные товары</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root__url ?>pages/products.php">Венок из искусственных цветов №47</a></li>
    </ul>

    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.CARD START -->

    <section class="card container">

        <img src="../images/wreath.png">
        <div class="card__info-box">
            <div class="card__top-block">
                <h1 class="common-h2 card__h1">
                    Венок из искусственных цветов №47
                </h1>
                <div class="card__in-stock">
                    в наличии
                </div>
            </div>
            <div class="card__code single-product-popup__code">
                Артикул: 123456
            </div>
            <p class="common-p card__p">
                В бюро ритуальных услуг «Горслужба-Ритуал» Вы можете приобрести Венок из искусственных цветов №47 по цене от 5950 руб. Осуществим доставку Вашего заказа по Москве и Московской области.
            </p>
            <ul class="single-product-popup__items card__items">
                <li class="common-p">
                    <span> Высота, см:</span>
                    <span>90,120,150,180 см</span>
                </li>
                <li class="common-p">
                    <span>Материал: </span>
                    <span> искусственные цветы ( розы , лилии ) </span>
                </li>
                <li class="common-p">
                    <span>Страна изготовления:</span>
                    <span>Россия</span>
                </li>
            </ul>
            <div class="single-product-popup__bottom-block">
                <div class="catalog__product-options" action="#">
                    <div class="card__product-option-1 card__product-option">

                        <div class="catalog__product-option-name">
                            Размер
                        </div>
                        <select class="catalog__product-option" name="size" id="size">
                            <option value="90">90 см</option>
                            <option value="120">120 см</option>
                            <option value="150">150 см</option>
                            <option value="180">180 см</option>
                        </select>

                        <div class="single-product-popup__price-block">
                            <p>Цена со всеми изменениями</p>
                            <div class="single-product-popup__price">
                                4400 ₽
                            </div>
                            <a href="#" class="common-btn_peach single-product-popup__btn">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="card__product-option-2 card__product-option">


                        <!-- RIBBON 1 -->

                        <div class="catalog__ribbon-box catalog__ribbon-box-1">

                            <div class="catalog__product-option-name">
                                Лента
                            </div>
                            <select class="catalog__product-option catalog__product-option-ribbon" name="ribbon">
                                <option value="0">Без ленты</option>
                                <option value="1">Стандартные надписи</option>
                                <option value="2">Своя надпись</option>
                            </select>

                            <select class="catalog__product-option insctiption" name="inscription">
                                <option value="0">Надпись 1</option>
                                <option value="1">Надпись 2</option>
                                <option value="2">Надпись 3</option>
                                <option value="3">Надпись 4</option>
                                <option value="4">Надпись 5</option>
                                <option value="5">Надпись 6</option>
                            </select>

                            <input class="catalog__product-option yourInscription" type="text" name="yourInscription">
                            <div class="catalog__product-ribbon-add-delete-btns">
                                <button class="catalog__add-ribbon-btn" value="catalog__ribbon-box-2">Добавить ленту</button>
                            </div>

                        </div>

                        <!-- RIBBON 2 -->

                        <div id="catalog__ribbon-box-2" class="catalog__ribbon-box catalog__ribbon-box-2">

                            <div class="catalog__product-option-name">
                                Лента
                            </div>
                            <select class="catalog__product-option catalog__product-option-ribbon" name="ribbon">
                                <option value="0">Без ленты</option>
                                <option value="1">Стандартные надписи</option>
                                <option value="2">Своя надпись</option>
                            </select>

                            <select class="catalog__product-option insctiption" name="inscription">
                                <option value="0">Надпись 1</option>
                                <option value="1">Надпись 2</option>
                                <option value="2">Надпись 3</option>
                                <option value="3">Надпись 4</option>
                                <option value="4">Надпись 5</option>
                                <option value="5">Надпись 6</option>
                            </select>

                            <input class="catalog__product-option yourInscription" type="text" name="yourInscription">
                            <div class="catalog__product-ribbon-add-delete-btns">
                                <button class="catalog__add-ribbon-btn" value="catalog__ribbon-box-3">Добавить ленту</button>
                                <button class="catalog__delete-ribbon-btn" value="catalog__ribbon-box-2">Удалить ленту</button>
                            </div>
                        </div>

                        <!-- RIBBON 3 -->

                        <div id="catalog__ribbon-box-3" class="catalog__ribbon-box catalog__ribbon-box-3">

                            <div class="catalog__product-option-name">
                                Лента
                            </div>
                            <select class="catalog__product-option catalog__product-option-ribbon" name="ribbon">
                                <option value="0">Без ленты</option>
                                <option value="1">Стандартные надписи</option>
                                <option value="2">Своя надпись</option>
                            </select>

                            <select class="catalog__product-option insctiption" name="inscription">
                                <option value="0">Надпись 1</option>
                                <option value="1">Надпись 2</option>
                                <option value="2">Надпись 3</option>
                                <option value="3">Надпись 4</option>
                                <option value="4">Надпись 5</option>
                                <option value="5">Надпись 6</option>
                            </select>

                            <input class="catalog__product-option yourInscription" type="text" name="yourInscription">
                            <div class="catalog__product-ribbon-add-delete-btns">
                                <button class="catalog__delete-ribbon-btn" value="catalog__ribbon-box-3">Удалить ленту</button>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>

    </section>

    <!-- 2.2.CARD END -->

    <!-- 2.3.HAVE A QUESTION START -->

    <?php include('../parts/have-a-question.php') ?>

    <!-- 2.3.HAVE A QUESTION END -->

    <!-- 2.4.CONTACT START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.4.CONTSCT END -->


</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->
<?php
include('../parts/footer.php')
?>
<!-- 3.FOOTER END -->