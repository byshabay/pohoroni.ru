<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="products main page">

    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Главная</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root__url ?>pages/products.php">Ритуальные товары</a></li>
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
                                76 товаров
                            </div>
                        </a>
                    </li>
                    <li class="catalog__sidebar-item">
                        <a href="#wreath">
                            Венки
                            <div class="catalog__sidebar-item-count">
                                76 товаров
                            </div>
                        </a>
                    </li>
                    <li class="catalog__sidebar-item">
                        <a href="#textile">
                            Текстиль
                            <div class="catalog__sidebar-item-count">
                                76 товаров
                            </div>
                        </a>
                    </li>
                    <li class="catalog__sidebar-item">
                        <a href="#crosses">
                            Кресты
                            <div class="catalog__sidebar-item-count">
                                76 товаров
                            </div>
                        </a>
                    </li>
                    <li class="catalog__sidebar-item">
                        <a href="#accessories">Аксессуары
                            <div class="catalog__sidebar-item-count">
                                76 товаров
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
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