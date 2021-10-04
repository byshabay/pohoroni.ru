<!-- 1.HEADER START -->
<?php include('../parts/header.php') ?>
<!-- 1.HEADER END -->

<!-- 2.MAIN START -->
<main class="error-404 main page">
    <div class="container">
        <img src="../images/error404.png">
        <p class="error-404__p">
            Страница не существует. <br>
            Пожалуйста, вернитесь на главную</p>
        <a class="common-btn_peach error-404__btn" href="<?= $root_url ?>">На главную</a>
    </div>
</main>

<!-- 2.MAIN END -->

<!-- 3.FOOTER START -->

<div class="contact-page__footer">
    <?php
    include('../parts/footer.php')
    ?>
</div>

<!-- 3.FOOTER END -->