<?php
$site_name = 'Daten i|o';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Datei zaehler.txt auslsesen und in zaehlerDatum[].txt schreiben';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$datum = date("dmY");
if (file_exists("../../resources/txtFile/zaehlerDatum" . $datum . ".txt")) {
  $datei = fopen("../../resources/txtFile/zaehler.txt", "r");
  $zahl = fread($datei, 2048);
  fclose($datei);
  $zahl++;
  echo "Sie sind der $zahl. Besucher.";
  $datei = fopen("../../resources/txtFile/zaehlerDatum" . $datum . ".txt", "w");
  fwrite($datei, $zahl);
  fclose($datei);
} else {
  $datei = fopen("../../resources/txtFile/zaehlerDatum" . $datum . ".txt", "w");
  fwrite($datei, 1);
  fclose($datei);
  echo "Datei angelegt";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>