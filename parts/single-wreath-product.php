<li class="catalog__simple-product">
    <img src="../images/wreath.png">
    <div class="catalog__product-info-box">
        <a href="<?= $root_url ?>pages/product-card.php" class="catalog__product-name">
            Венок из искусственных цветов №47
        </a>
        <p class="catalog__in-stock">
            в наличии
        </p>

        <form class="catalog__product-options" action="#">

            <div class="catalog__product-option-name">
                Размер
            </div>
            <select class="catalog__product-option" name="size" id="size">
                <option value="90">90 см</option>
                <option value="120">120 см</option>
                <option value="150">150 см</option>
                <option value="180">180 см</option>
            </select>

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
        </form>

        <p class="catalog__price">
            1464
            <span class='ruble'>₽</span>
        </p>
        <a href="#" class="common-border-button catalog__to-order-btn">
            Заказать
        </a>
    </div>
</li>