<?php
if (!isset($_GET["name"])) {
  # code...
  die('sorry try again');
  exit();

}

// support arabic
require_once './lib/ar-php.php';
$Arabic = new I18N_Arabic('Glyphs');
$text = $Arabic->utf8Glyphs($_GET["name"]);

// config
$imagePath = 'images/hacker.jpg';
$font_path = './fonts/ae_AlHor.ttf'; // Set Path to Font File
$x = 1100;
$y = 80;

header('Content-type: image/jpeg');
// Load And Create Image From Source
$our_image = imagecreatefromjpeg($imagePath);

// Allocate A Color For The Text Enter RGB Value
$white_color = imagecolorallocate($our_image, 255, 255, 255);


// Print Text On Image
imagettftext($our_image, 30,0,$x,$y, $white_color, $font_path, $text);

// Send Image to Browser
imagejpeg($our_image);

// Clear Memory
imagedestroy($our_image);



 ?>
