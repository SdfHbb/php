<?php
$site_name = 'Daten auslesen';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Datei: besucher.txt';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php

$datei = file("../../resources/txtFile/besucher.txt");
// print_r($datei);
$datei = array_reverse($datei);
foreach ($datei as $key) {
  $teile = explode(";", $key);
  echo "$teile[0] - $teile[1]<br>";
  echo "$teile[2] - $teile[3]<hr>";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>