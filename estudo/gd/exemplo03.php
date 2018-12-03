<?php

$image = imagecreatefromjpeg("certificado.jpg");
$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 150, $titlecolor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titlecolor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Alice de Oliveira");
imagestring($image, 5, 450, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titlecolor);

header("content-type: image/jpeg");

imagejpeg($image);

imagedestroy($imagem);


?>