<?php
/*$post = (!empty($_POST)) ? true : false;
*/if($post) {
��$name = $_POST['name'];
��$email = $_POST['email'];
��$mytel = $_POST['mytel'];
��$message = $_POST['message'];
��$captcha_code = $_POST['captcha_code'];
��$error = '';
��if(!$name) {$error .= '������� ���� ���. ';}
��if(!$email) {$error .= '������� ����������� �����. ';}
��if($captcha_code != 12) {$error .= '��� �������� ������ �����������, ���� ����. ';}
��if(!$message || strlen($message) < 1) {$error .= '������� ���������. ';}
��if(!$error) {
����$address = "wms-nik@mail.ru";
����$sub = "���� ��������� �����";
����$mes = "���: ".$name."\n\nE-mail: ".$email."\n\n�������: ".$mytel."\n\n���������: ".$message."\n\n";
����$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
����if($send) {echo 'OK';}
��}
��else {echo '<div class="err">'.$error.'</div>';}
}
?>