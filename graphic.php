<?php
// Ensure no previous output before headers
header("Content-Type: image/png");

// Create an image
$image = imagecreatetruecolor(200, 100);

// Check if image creation was successful
if (!$image) {
    die("GD Library not available or failed to create image.");
}

// Allocate colors
$background = imagecolorallocate($image, 173, 216, 230); // Light blue
$rectangle = imagecolorallocate($image, 255, 0, 0); // Red
$textColor = imagecolorallocate($image, 0, 0, 0); // Black

// Fill background
imagefill($image, 0, 0, $background);

// Draw a rectangle
imagerectangle($image, 50, 30, 150, 70, $rectangle);

// Add text
imagestring($image, 5, 60, 40, "Hello!", $textColor);

// Output the image as PNG
imagepng($image);

// Free memory
imagedestroy($image);
?>
