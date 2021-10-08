<form id="review-popup" class="common-popup-form">
    <div class="common-h2">
        Оставьте свой отзыв
    </div>
    <p class="common-popup-p order-popup-p">
        Оставьте свой отзыв о работе с нашей компанией.
        Это поможет нашим новым клиентам
    </p>
    <div class="common-popup-error">
        Введите корректные данные
    </div>
    <div class="common-popup-inputs">
        <input class="common-popup-input" type="text" name="review-popup-name" id="review-popup-name" placeholder="Ваше имя">
        <input class="common-popup-input" type="tel" name="review-popup-phone" id="review-popup-phone" placeholder="Ваш номер телефона">
        <input class="common-popup-input common-popup-textarea" type="text" name="review-popup-text" id="review-popup-text" placeholder="Ваш отзывы">
        <input class="common-popup-input" type="text" name="review-popup-email" id="review-popup-email" placeholder="Ваш email">
        <button class="common-btn_peach popup-btn" type="submit">Отправить</button>
        <p class="common-popup-mini-text">
            Нажимая на кнопку "Отправить", Вы соглашаетесь с правилами обработки <a href="#"> персональных данных</a>.
        </p>
    </div>
    <a href="<?= $root_url ?>" class="common-btn_white order-popup-succes-a">На главную </a>

</form>