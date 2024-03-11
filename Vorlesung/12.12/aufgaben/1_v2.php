<?php
$site_name = 'Aufgabe 1 v2';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Leider hat sich in der Datei <b>"Liste-Staedte-in-Deutschland.txt"</b> beim Speichern der Städte ein
Fehler eingeschlichen, bei Postleitzahlen mit führender Null fehlt genau diese Zahl, also statt
01067;Dresden steht dort nur 1067;Dresden ... <br>
Erstellen Sie ein PHP-Skript, dass die PLZ-Liste in eine neue, saubere Datei exportiert.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php

$alt = fopen("../../../resources/txtFile/Liste-Staedte-in-Deutschland.txt", "r");
$neu = fopen("../../../resources/txtFile/stadtNeu.txt", "w");
$null = "0";

$zeile = fgets($alt);
fwrite($neu, $zeile);
$zeile = fgetcsv($alt, 2048, ";");
while (!feof($alt)) {
  if (strlen($zeile[0]) == 4)
    $zeile[0] = "0" . $zeile[0];
  $zeilen = implode(";", $zeile);
  fwrite($neu, $zeilen . "\n");
  $zeile = fgetcsv($alt, 2048, ";");
}

fclose($alt);
fclose($neu);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>