<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="reviews-page main page">
    <!-- 2.1.BREAD CRUMBS START -->

    <ul class="bread-crumbs container">
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Главная</a></li>
        <li class="bread-crumbs__item"><a href="<?= $root__url ?>">Полезные материалы</a></li>
        <li class="bread-crumbs__item bread-crumbs__item_active"><a href="<?= $root__url ?>pages/reviews-page.php">Отзывы</a></li>
    </ul>
    <!-- 2.1.BREAD CRUMBS END -->

    <h1 class="common-h1 reviews-page__h1 container">
        Отзывы наших клиентов
    </h1>

    <!-- 2.2.DO YOU WANT BLOCK START -->

    <section class="have-a-question common-mini-banner">
        <div class="container">
            <div class="common-h2 have-a-question__h2">
                Хотите
                оставить отзыв?
            </div>
            <p class="common-p have-a-question__p">
                Мы буде рады если вы поделитесь опытом работы с нами, для наших будущих клиентов.
            </p>
            <a href="#" class="common-btn_white have-a-question__btn">
                Оставить отзыв
            </a>

        </div>
    </section>

    <!-- 2.2.DO YOU WANT BLOCK END -->

    <!-- 2.3.REVIEWS CATALOG START -->

    <section class="reviews-catalog container">
        <ul class="reviews-catalog__list">
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>

            <li>
                <?php include('../parts/single-review.php') ?>
            </li>

            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>

            <li>
                <?php include('../parts/single-review.php') ?>
            </li>

            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>

            <li>
                <?php include('../parts/single-review.php') ?>
            </li>

            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
            <li>
                <?php include('../parts/single-review.php') ?>
            </li>

            <li>
                <?php include('../parts/single-review.php') ?>
            </li>

            <li>
                <?php include('../parts/single-review.php') ?>
            </li>
        </ul>
        <p class="common-p reviews-catalog__p">

        </p>

        <button class="common-btn_peach reviews-catalog__btn">
            Показать еще
        </button>
    </section>

    <!-- 2.3.REVIEWS CATALOG END -->

    <!-- 2.4.CONTACTS START -->

    <?php include('../parts/contact-part.php') ?>

    <!-- 2.4.CONTACTS END -->

</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->

<?php
include('../parts/footer.php')
?>

<!-- 3.FOOTER END -->