<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$subEmail = $_POST['subscriptionalEmail'];
$option = $_POST['modal-option'];
$message = $_POST['message'];
$modalMail = $_POST['email'];
$comment = $_POST['comment'];
$button = $_POST['button'];


// Формирование письма с подпиской
$titleSub = "Подписка на новости Universal";
$bodySub = "
<h2>Ура, новый подписчик!</h2>
<b>Подписка оформлена на почту:</b> $subEmail<br>
";

// Формирование письма с обратной связью
$titleModal = "Обратная связь";
$bodyModal = "
<h2>Новое сообщение</h2>
<b>Тема:</b> $option<br>
<b>Сообщение:</b> $message<br>
<b>Почта отправителя:</b> $modalMail
";

// Формирование письма с комментарием
$titleComment = "Новый комментарий";
$bodyComment = "
<h2>Опубликован новый комментарий:</h2>
$comment
";

function sendMessage ($title,$body) {
// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'olala.files@yandex.ru'; // Логин на почте
    $mail->Password   = '1lisgsus3'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('olala.files@yandex.ru', 'Olia Kurbatova'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('olala.tsk@yandex.ru');

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

}

if ($button == 'subscribeBtn') {
    sendMessage($titleSub, $bodySub);
    header('Location: thankyou.php');

} elseif ($button == 'feedbackBtn') {
    sendMessage($titleModal, $bodyModal);
    header('Location: feedback.php');
} elseif ($button == 'commentBtn') {
    sendMessage($titleComment, $bodyComment);
    header('Location: comment.php');
} else {
    echo 'Error';
}


// Отображение результата
//echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
