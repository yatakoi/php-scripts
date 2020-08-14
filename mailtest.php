<?php
# Для проверки лучше использовать сервис временной почты https://temp-mail.org,
# чтобы понять - проблема на сервере или попросту IP сервера в черных списках?
$to      = 'netebe9359@corsj.net';
$subject = 'the testphp';
$message = 'hello';
$headers = 'From: test@osago.work.com' . "\r\n" .
    'Reply-To: ptest@osago.work.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
