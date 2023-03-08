<?php

/* https://api.telegram.org/bot6255820951:AAETOzzmSvzKuIQ7FDW17pdlFDxrTuFnKe8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$last = $_POST['last_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];

$date = $_POST['date'];
$time= $_POST['time'];
$message = $_POST['message'];
$token = "6255820951:AAETOzzmSvzKuIQ7FDW17pdlFDxrTuFnKe8";
$chat_id = "-967808551";
$arr = array(
  'Имя пользователя: ' => $name,
  'Фамилия пользователя: ' => $last,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Дата: ' => $date,
  'Время: ' => $time,
  'Сообщение: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>