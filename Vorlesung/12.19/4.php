<?php
$site_name = 'Testklausur Aufgabe 4';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = '
<ul>
<li>
  Was ist falsch am Funktionsaufruf
  $huch()=69; ?
</li>
<li>
Ist folgende Anweisungsfolge erlaubt? <br>
$hach=69; <br>
$hach=true; <br>
$hach = "7";
</li>
<li>Was steht auf dem Bildschirm nach folgender Anweisung: <br>
(Wert von $hach aus der vorigen Aufgabe!) <br> <br>
echo "Wert von $hach: " ; <br>
echo \' $hach Euro\' ;</li>
</ul>

';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php

$hach = "7";
echo "Wert von $hach: <br>";
echo '$hach Euro';
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>