<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // получаем данные из формы
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // формируем заголовок письма
    $subject = "Новое сообщение с сайта";

    // формируем тело письма
    $body = "Имя: " . $name . "\n" .
            "Email: " . $email . "\n" .
            "Телефон: " . $phone . "\n" .
            "Сообщение: " . $message;

    // отправляем письмо
    if (mail("recipient@example.com", $subject, $body)) {
        echo "Письмо отправлено";
    } else {
        echo "Ошибка отправки письма";
    }

}
?>

