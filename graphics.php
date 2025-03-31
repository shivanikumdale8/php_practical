<?php
// Set the content type to display image
header("Content-Type: image/png");

// Create an image canvas (width: 400, height: 300)
$image = imagecreatetruecolor(400, 300);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$blue = imagecolorallocate($image, 0, 0, 255);
$green = imagecolorallocate($image, 0, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Fill the background with white
imagefill($image, 0, 0, $white);

// Draw a rectangle
imagerectangle($image, 50, 50, 350, 250, $red);

// Draw a filled ellipse (circle)
imagefilledellipse($image, 200, 150, 100, 100, $blue);

// Draw a line
imageline($image, 50, 50, 350, 250, $green);

// Draw a polygon (triangle)
$points = [100, 200, 200, 50, 300, 200];
imagepolygon($image, $points, 3, $black);

// Add text
$font = 5; // Built-in font size
imagestring($image, $font, 150, 260, "Hello, GD Graphics!", $black);

// Output the image as PNG
imagepng($image);

// Free memory
imagedestroy($image);
?>
