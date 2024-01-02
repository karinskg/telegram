
<?php

/* https://api.telegram.org/bot5909066450:AAGv-z6-_sLGPcEIPlTFL4jd5dmMI7Kwzhs/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "5909066450:AAGv-z6-_sLGPcEIPlTFL4jd5dmMI7Kwzhs";
$chat_id = "-4077255984";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('Location: thankyou.html');
  } else {
    echo "Error";
  }
?>
