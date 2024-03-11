<?php
header('Content-Type:image/png');
$bild1 = imageCreateTruecolor(450, 600);
$green = imageColorAllocate($bild1, 50, 255, 50);
$brown = imageColorAllocate($bild1, 139, 119, 101);
$gold = imageColorAllocate($bild1, 238, 221, 30);
$red = imageColorAllocate($bild1, 255, 0, 0);

$ecke0 = array("225", "40", "325", "190", "125", "190");
$ecke1 = array("225", "140", "365", "310", "85", "310");
$ecke2 = array("225", "240", "405", "450", "45", "450");
$stern0 = array("225", "20", "230", "30", "238", "30", "230", "37", "235", "47", "225", "40", "215", "47", "220", "37", "212", "30", "220", "30");

imagefilledpolygon($bild1, $ecke0, 3, $green);
imagefilledpolygon($bild1, $ecke1, 3, $gold);
imagefilledpolygon($bild1, $ecke2, 3, $green);
imagefilledrectangle($bild1, 200, 450, 250, 550, $brown);
imagefilledpolygon($bild1, $stern0, 10, $gold);
imagefilledellipse($bild1, 325, 190, 30, 30, $red);
imagefilledellipse($bild1, 125, 190, 30, 30, $red);
imagefilledellipse($bild1, 365, 310, 30, 30, $red);
imagefilledellipse($bild1, 85, 310, 30, 30, $red);
imagefilledellipse($bild1, 405, 450, 30, 30, $red);
imagefilledellipse($bild1, 45, 450, 30, 30, $red);
imagepng($bild1);
imagedestroy($bild1);
