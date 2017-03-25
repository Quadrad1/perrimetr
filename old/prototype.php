<?php
/*$post = (!empty($_POST)) ? true : false;
*/if($post) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mytel = $_POST['mytel'];
  $message = $_POST['message'];
  $captcha_code = $_POST['captcha_code'];
  $error = '';
  if(!$name) {$error .= 'Óêàæèòå ñâîå èìÿ. ';}
  if(!$email) {$error .= 'Óêàæèòå ýëåêòðîííóþ ïî÷òó. ';}
  if($captcha_code != 12) {$error .= 'Êîä ïðîâåðêè ââåäåí íåêîððåêòíî, ëèáî ïóñò. ';}
  if(!$message || strlen($message) < 1) {$error .= 'Ââåäèòå ñîîáùåíèå. ';}
  if(!$error) {
    $address = "wms-nik@mail.ru";
    $sub = "Òåìà ñîîáùåíèÿ çäåñü";
    $mes = "Èìÿ: ".$name."\n\nE-mail: ".$email."\n\nÒåëåôîí: ".$mytel."\n\nÑîîáùåíèå: ".$message."\n\n";
    $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
    if($send) {echo 'OK';}
  }
  else {echo '<div class="err">'.$error.'</div>';}
}
?>