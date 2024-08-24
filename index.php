<?php 
include 'Telegram.php';
$telegram = new Telegram('7066558045:AAE3eVozlri3VOfa8Fzh28kvMl_3M5znzXM');
$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'hi');
$telegram->sendMessage($content);