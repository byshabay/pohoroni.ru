<form tabindex="1" id="calculate-the-cost" class="common-popup-form">
    <div class="common-h2">
        Расчет стоимости ритуальных услуг
    </div>
    <p class="common-popup-p order-popup-p">
        Специалист перезвонит в течение нескольких минут и предложит 3 плана похорон
    </p>
    <div class="common-popup-error">
        Введите корректные данные
    </div>
    <div class="calculate-popup__how">
        <input name="how" type="radio" id="burialAnswer" value="burialAnswer" checked="checked">
        <label class="common-popup-p" for="burialAnswer">Захоронение</label>

        <input name="how" type="radio" id="cremationAnswer" value="cremationAnswer">
        <label class="common-popup-p" for="cremationAnswer">Кремация</label>
    </div>
    <div class="transporation">
        <div class="common-h3 calculate-popup__h2">
            Потребуются ли услуги перевозки?
        </div>

        <input type="checkbox" id="0" value="0">
        <label class="common-popup-p" for="0">Только умершего</label>

        <input type="checkbox" id="1" value="1">
        <label class="common-popup-p" for="1">Близких и родных покойного</label>

        <input type="checkbox" id="2" value="2">
        <label class="common-popup-p" for="2">В другой регион/страну</label>
    </div>
    <div class="common-popup-inputs">
        <input class="common-popup-input" type="text" name="calculate-popup-name" id="calculate-popup-name" placeholder="Ваше имя">
        <input class="common-popup-input" type="tel" name="calculate-popup-phone" id="calculate-popup-phone" placeholder="Ваш номер телефона">
        <div class="calculate-popup__help">
            <input type="checkbox" id="3" value="3">
            <label class="common-popup-p" for="3">Необходима помощь в получении компенсации</label>
        </div>
        <button class="common-btn_peach popup-btn" type="submit">Отправить</button>
    </div>
    <a href="<?= $root_url ?>" class="common-btn_white order-popup-succes-a">На главную </a>
    <p class="common-popup-mini-text">
        Нажимая на кнопку "Отправить", Вы соглашаетесь с правилами обработки <a href="<?= $root_url ?>pages/privacy.php"> персональных данных</a>.
    </p>

    <div class="calculate__hidden-inputs">
    </div>
</form>