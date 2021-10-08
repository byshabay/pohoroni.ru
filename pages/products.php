<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="products main page">

    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root_url ?>">Главная</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root_url ?>pages/products.php">Ритуальные товары</a></li>
    </ul>

    <!-- 2.1.BREAD CRUMBS END -->

    <!-- 2.2.CATALOG START -->

    <section class="catalog container">
        <h1 class="common-h1 catalog__h1">
            Каталог ритуальных товаров
        </h1>

        <div class="catalog__wrapper">
            <div class="catalog__sidebar">
                <div class="common-h2 catalog__h2">
                    Категории
                </div>
                <ul class="catalog__sidebar-items">
                    <li class="catalog__sidebar-item">
                        <a href="#coffins">
                            Гробы
                            <div class="catalog__sidebar-item-count">
                                <div class="catalog__sidebar-item-count-num">
                                    76
                                </div>
                                <div class="catalog__sidebar-item-count-units">
                                    товаров
                                </div>
                            </div>
                        </a>

                        <ul class="catalog__sidebar-submenu">
                            <li class="catalog__sidebar-submenu-item">
                                <a href="#">
                                    Постель в гроб
                                </a>
                            </li>
                            <li class="catalog__sidebar-submenu-item">
                                <a href="#">
                                    Одежда
                                </a>
                            </li>
                            <li class="catalog__sidebar-submenu-item">
                                <a href="#">
                                    Покрывало
                                </a>
                            </li>
                            <li class="catalog__sidebar-submenu-item">
                                <a href="#">
                                    Подушка в гроб
                                </a>
                            </li>
                            <li class="catalog__sidebar-submenu-item">
                                <a href="#">
                                    Обувь
                                </a>
                            </li>
                            <li class="catalog__sidebar-submenu-item">
                                <a href="#">
                                    Орденские подушки
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="catalog__sidebar-item">
                        <a href="#wreath">
                            Венки
                            <div class="catalog__sidebar-item-count">
                                <div class="catalog__sidebar-item-count-num">
                                    76
                                </div>
                                <div class="catalog__sidebar-item-count-units">
                                    товаров
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="catalog__sidebar-item">
                        <a href="#textile">
                            Текстиль
                            <div class="catalog__sidebar-item-count">
                                <div class="catalog__sidebar-item-count-num">
                                    76
                                </div>
                                <div class="catalog__sidebar-item-count-units">
                                    товаров
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="catalog__sidebar-item">
                        <a href="#crosses">
                            Кресты
                            <div class="catalog__sidebar-item-count">
                                <div class="catalog__sidebar-item-count-num">
                                    76
                                </div>
                                <div class="catalog__sidebar-item-count-units">
                                    товаров
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="catalog__sidebar-item">
                        <a href="#accessories">Аксессуары
                            <div class="catalog__sidebar-item-count">
                                <div class="catalog__sidebar-item-count-num">
                                    76
                                </div>
                                <div class="catalog__sidebar-item-count-units">
                                    товаров
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- COFFINS -->

            <ul id="coffins" class="catalog__products ">

                <!-- 1 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 2 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 3 PRODUCT -->

                <?php include("../parts/single-product.php") ?>


                <!-- 4 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 5 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 6 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

            </ul>

            <!-- WREATH -->

            <ul id="wreath" class="catalog__products catalog__products_active">
                <!-- 1 WREATH -->

                <?php include('../parts/single-wreath-product.php') ?>

                <!-- 2 WREATH -->

                <?php include('../parts/single-wreath-product.php') ?>

                <!-- 3 WREATH -->

                <?php include('../parts/single-wreath-product.php') ?>

                <!-- 4 WREATH -->

                <?php include('../parts/single-wreath-product.php') ?>

                <!-- 5 WREATH -->

                <?php include('../parts/single-wreath-product.php') ?>

                <!-- 6 WREATH -->

                <?php include('../parts/single-wreath-product.php') ?>

            </ul>

            <!-- TEXTILE -->

            <ul id="textile" class="catalog__products ">

                <!-- 1 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 2 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 3 PRODUCT -->

                <?php include("../parts/single-product.php") ?>


                <!-- 4 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 5 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 6 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

            </ul>

            <!-- CROSSES -->

            <ul id="crosses" class="catalog__products ">

                <!-- 1 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 2 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 3 PRODUCT -->

                <?php include("../parts/single-product.php") ?>


                <!-- 4 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 5 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 6 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

            </ul>

            <!-- ACCESSORIES -->

            <ul id="accessories" class="catalog__products ">

                <!-- 1 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 2 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 3 PRODUCT -->

                <?php include("../parts/single-product.php") ?>


                <!-- 4 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 5 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

                <!-- 6 PRODUCT -->

                <?php include("../parts/single-product.php") ?>

            </ul>

            <!-- 2.2.1.SINGLE PRODUCT POPUP START -->

            <?php include('../parts/single-product-popup.php') ?>

            <!-- 2.2.1.SINGLE PRODUCT POPUP END -->

            <!-- 2.2.2.SINGLE PRODUCT WREATH POPUP START -->

            <?php include('../parts/single-wreath-product-popup.php') ?>

            <!-- 2.2.2.SINGLE PRODUCT WREATH POPUP END -->
        </div>
    </section>


    <!-- 2.2.CATALOG END -->

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