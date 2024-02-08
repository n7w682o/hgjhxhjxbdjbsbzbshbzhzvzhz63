<?php
header("Content-Type: application/json; charset=UTF-8");
error_reporting(0);
$khaled = $_GET["token"];
$chat_id = $_GET["chat_id"];
if($khaled){
$vuu = 1;
for($i=0; $i<$vuu; $i++){
$dd = file_get_contents("https://api-jack.ml/api59.php");
$str =  strip_tags($dd);
$ex = explode(" ",$str);
}
for ($x = 0; $x <= 4096; $x++) {
$a = $a." ".$ex[$x];
}
file_get_contents("http://api.telegram.org/bot$khaled/sendmessage?chat_id=$chat_id&text=$a");
}

echo "𝚃𝙷𝙴 𝙵𝙸𝚁𝚂𝚃 𝙲𝙷𝙰𝙽𝙽𝙴𝙻 : https://t.me/c3c3z
𝚃𝙷𝙴 𝚂𝙴𝙲𝙾𝙽𝙳 𝙲𝙷𝙰𝙽𝙽𝙴𝙻 : https://t.me/o6o6l
𝙿𝚁𝙾𝙶𝚁𝙰𝙼𝙼𝙴𝚁 𝙰𝙲𝙲𝙾𝚄𝙽𝚃 : https://t.me/c3c3z
𝙲𝙾𝙽𝚃𝙰𝙲𝚃 𝚃𝙷𝙴 𝙿𝚁𝙾𝙶𝚁𝙰𝙼𝙼𝙴𝚁 : https://t.me/c3c3z";
