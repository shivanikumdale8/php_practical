<?php
$image = imagecreatetruecolor(400, 400);


$white = imagecolorallocate($image, 255, 255, 255); 
$red = imagecolorallocate($image, 255, 0, 0); 

imagefill($image, 0, 0, $white);


imagefilledrectangle($image, 50, 50, 350, 350, $red);

header('Content-Type: image/png');
imagepng($image);


imagedestroy($image);
?>
