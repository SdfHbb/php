<?php
$site_name = 'Besucherzähler';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Falls Datei nicht vorhanden, wird diese erstellt';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php

if (file_exists("../../resources/txtFile/zaehler.txt")) {
  echo "Datei gefunden <br>";
  $datei = fopen("../../resources/txtFile/zaehler.txt", "r");
  $zahl = fread($datei, 2048);
  fclose($datei);
  $zahl++;

  $datei = fopen("../../resources/txtFile/zaehler.txt", "w");
  // Inhalt von $zahl in Datei schreiben
  fwrite($datei, $zahl);
  fclose($datei);

  echo "Sie sind der $zahl Besucher";
} else {
  // Überprüfen, ob Datei vorhanden, ansonsten wird diese erstellt
  echo "Datei nicht vorhanden";
  $datei = fopen("../../resources/txtFile/zaehler.txt", "w");
  // Inhalt "1" in Datei schreiben
  fwrite($datei, 1);
  fclose($datei);
  echo "Datei angelegt";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>