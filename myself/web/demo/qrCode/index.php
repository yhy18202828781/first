<?php

include "phpqrcode/phpqrcode.php"; 

$string = 'http://120.27.120.104:85/yy';
$errorCorrectionLevel = "L";
$matrixPointSize = 6;
$qrcode = new QRcode();
$qrcode->png($string, false, $errorCorrectionLevel, $matrixPointSize);
exit;