<?php
//Generieren Zufallstext:
$text = explode(" ", "A B C D E F G H K L M N P R S T X Y Z 2 3 4 5 7 8");
shuffle($text);
$capt = "";
// Version 1
$text = implode($text);
$capt = substr($text, 0, 6);

// Session starten und setzen
session_start();
$_SESSION["cap"] = $capt;

// Version 2
//for($i=0;$i<6;$i++)
//  $capt.=$text[$i];

//Bild "bauen"
header("Content-type:image/jpeg");
$bild = imagecreatefromjpeg('../../images/captcha/textur.jpg');

//Es wird bunt!
$w[] = imagecolorallocate($bild, 255, 255, rand(0, 255));
$w[] = imagecolorallocate($bild, 255, 0, 255);
$w[] = imagecolorallocate($bild, 0, 255, 255);
$w[] = imagecolorallocate($bild, 255, 255, 0);
$w[] = imagecolorallocate($bild, 255, 0, 0);
$w[] = imagecolorallocate($bild, 0, 0, 255);

//Schrift laden
$fnt = $_SERVER['DOCUMENT_ROOT'] . '/php/resources/fonts/arial.ttf';


//Einzelne verdrehte Buchstaben anzeigen
//imagettftext($bild,$schriftgroesse,$winkel,$x,$y,$farbe,$schriftart,$text)
imagettftext(
  $bild,
  34,
  rand(-50, 50),
  20,
  90,
  $w[rand(0, count($w) - 1)],
  $fnt,
  $text[0]
);
imagettftext(
  $bild,
  34,
  rand(-15, 15),
  55,
  85,
  $w[rand(0, count($w) - 1)],
  $fnt,
  $text[1]
);
imagettftext(
  $bild,
  34,
  rand(-15, 15),
  90,
  90,
  $w[rand(0, count($w) - 1)],
  $fnt,
  $text[2]
);
imagettftext(
  $bild,
  34,
  rand(-15, 15),
  125,
  90,
  $w[rand(0, count($w) - 1)],
  $fnt,
  $text[3]
);
imagettftext(
  $bild,
  34,
  rand(-15, 15),
  160,
  95,
  $w[rand(0, count($w) - 1)],
  $fnt,
  $text[4]
);
imagettftext(
  $bild,
  34,
  rand(-15, 15),
  195,
  90,
  $w[rand(0, count($w) - 1)],
  $fnt,
  $text[5]
);
imagejpeg($bild);
