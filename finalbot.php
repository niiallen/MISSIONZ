<?php

$botToken = "255649217:AAFxloiulIMAFEQZ29EgEn9kjyNeQ8MS9lc";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

print_r($updateArray);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];


file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=what of him??");  

?>