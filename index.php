<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <button class="modal-link" type="button" name="button">Задать вопрос</button>
        <div class="popup-overlay"></div>
        <div class="popup">
            <div class="cross-wrapper">
                <span class="cross">&times;</span>
            </div>
            <form class="ult-form" role="form">
                <p><label for="ult-form-name">ФИО</label></p>
                <p><input type="text" id="ult-form-name" name="" value=""></p>
                <p><label for="ult-form-phone">Телефон</label></p>
                <p><input type="tel" id="ult-form-phone" name="" value="" required></p>
                <p><label for="ult-form-mail">E-mail</label></p>
                <p><input type="text" id="ult-form-mail" name="" value=""></p>
                <p><label for="ult-form-message">Сообщение</label></p>
                <p><textarea name="" rows="6" cols="60" id="ult-form-message"></textarea></p>
                <div class="g-recaptcha" data-sitekey="6LcQ17cUAAAAAOpaaNSYPdnzBiYH-yf3wLExxxCm"></div>
                <button class="ult-form-btn" type="submit" name="button">Отправить</button>
                <p class="ult-form-request"></p>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
