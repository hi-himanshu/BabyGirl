<?
$input = file_get_contents('php://input');
$update = json_decode($input);
$message = $update->$message;
$chat_id = $message->chat->id;
$text = $message->text;
$token = '1324209766:AAHKV_fqMk2F71FzJs5hyTkuAFPeC2vqg10';
file_get_contents("http://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$text")
