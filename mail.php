<?php
$re = $_POST["Recaptcha"];
unset($_POST["Recaptcha"]);

if (!$re) {
    echo "<span class='ult-form-alert'>Заполните капчу</span>";
} else {
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $key = "6LcQ17cUAAAAAC2TV7JkqKmLoAj8BdR9mJ6Oe1lk";
    $query = $url.'?secret='.$key.'&response='.$re.'&remoteip='.$_SERVER['REMOTE_ADDR'];

    $data = json_decode(file_get_contents($query));

    if ($data->success) {

            $to = "mitusov@office11.ru"; /*Укажите адрес, га который должно приходить письмо  */

            $sendfrom   = "mysite.ru"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/

            $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

            $subject = "Форма обратной связи с сайта";

            foreach ($_POST as $key => $value) {
                $message .= "<b>$key:</b> $value</br>";
            }

            $send = mail ($to, $subject,$message,$headers);

            if ($send == 'true')
            {
                echo "<span class='ult-form-success'>Ваше сообщение успешно отправлено</span>";
            }
            else
            {
                echo "<span class='ult-form-alert'>Ошибка. Сообщение не отправлено</span>";
            }
    } else {
        echo "<span class='ult-form-alert'>Капча введена неверно</span>";
    }

}
