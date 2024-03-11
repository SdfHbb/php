<?php
$site_name = 'Aufgabe 1 v1';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Leider hat sich in der Datei <b>"Liste-Staedte-in-Deutschland.txt"</b> beim Speichern der Städte ein
Fehler eingeschlichen, bei Postleitzahlen mit führender Null fehlt genau diese Zahl, also statt
01067;Dresden steht dort nur 1067;Dresden ... <br>
Erstellen Sie ein PHP-Skript, dass die PLZ-Liste in eine neue, saubere Datei exportiert.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php

$datei = fopen("../../../resources/txtFile/Liste-Staedte-in-Deutschland.txt", "r");
$zeile = fgetcsv($datei, 2048, ";");

$wert = 0;
while (!feof($datei)) {
  $neu[$wert] = array($zeile[0], $zeile[1], $zeile[2], $zeile[3], $zeile[4], $zeile[5]);
  $zeile = fgetcsv($datei, 2048, ";");
  $wert++;
}

foreach ($neu as $key => $value) {
  if ($neu[$key][0] < 10000) {
    $neu[$key][0] = "0" . $neu[$key][0];
  }
}

$stadt = fopen("../../../resources/txtFile/stadtNeu.txt", "w");
foreach ($neu as $key => $value) {
  $zahl =
    $neu[$key][0] . ";" .
    $neu[$key][1] . ";" .
    $neu[$key][2] . ";" .
    $neu[$key][3] . ";" .
    $neu[$key][4] . ";" .
    $neu[$key][5] . "\n";
  fwrite($stadt, $zahl);
}

fclose($datei);
fclose($stadt);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>