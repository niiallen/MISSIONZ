<?php

$botToken = "255649217:AAFxloiulIMAFEQZ29EgEn9kjyNeQ8MS9lc";
$website = "https://api.telegram.org/bot".$botToken;


?>

<form action = "<?php echo $website.'/sendPhoto' ?>" method="post" enctype="multipart/form-data">

     <input type="text" name="chat_id" value="302906215" />
	 <input type = "file" name="photo" />
	 <input type="submit" value="send" />  
	 
</form>