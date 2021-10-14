<form tabindex="1" id="call-request-popup" class="common-popup-form">
    <div class="common-h2">
        Обратный звонок
    </div>
    <div class="common-popup-error">
        Введите корректные данные
    </div>
    <div class="common-popup-inputs">
        <input class="common-popup-input" type="text" name="call-request-name" id="call-request-name" placeholder="Ваше имя">
        <input class="common-popup-input" type="tel" name="call-request-phone" id="call-request-phone" placeholder="Ваш номер телефона">
    </div>
    <button class="common-btn_peach popup-btn" type="submit">Отправить</button>
    <a href="<?= $root_url ?>" class="common-btn_white order-popup-succes-a">На главную </a>
    <p class="common-popup-mini-text">
        Нажимая на кнопку "Отправить", Вы соглашаетесь с правилами обработки <a href="<?= $root_url ?>pages/privacy.php"> персональных данных</a>.
    </p>
</form>