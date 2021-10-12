<form tabindex="1" id="order-call" class="common-popup-form">
    <div class="common-h2">
        Вызов ретуального агента
    </div>
    <p class="common-popup-p order-popup-p">
        С помощью данного сервиса после заполнения всех полей к Вам на указанный адрес приедет ритуальный наш агент.
    </p>
    <div class="common-popup-error">
        Введите корректные данные
    </div>
    <div class="common-popup-inputs">
        <input class="common-popup-input" type="text" name="popup-name" id="popup-name" placeholder="Ваше имя">
        <input class="common-popup-input" type="tel" name="popup-phone" id="popup-phone" placeholder="Ваш номер телефона">
        <input class="common-popup-input" type="text" name="popup-address" id="popup-address" placeholder="Ваш адрес">
        <button class="common-btn_peach popup-btn" type="submit">Отправить</button>
    </div>
    <a href="<?= $root_url ?>" class="common-btn_white order-popup-succes-a">На главную </a>
    <p class="common-popup-mini-text">
        Нажимая на кнопку "Отправить", Вы соглашаетесь с правилами обработки <a href="<?= $root_url ?>pages/privacy.php"> персональных данных</a>.
    </p>
</form>