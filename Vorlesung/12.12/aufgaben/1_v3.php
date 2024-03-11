<?php
$site_name = 'Aufgabe 1 v3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Leider hat sich in der Datei <b>"Liste-Staedte-in-Deutschland.txt"</b> beim Speichern der Städte ein
Fehler eingeschlichen, bei Postleitzahlen mit führender Null fehlt genau diese Zahl, also statt
01067;Dresden steht dort nur 1067;Dresden ... <br>
Erstellen Sie ein PHP-Skript, dass die PLZ-Liste in eine neue, saubere Datei exportiert.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$alt = file("../../../resources/txtFile/Liste-Staedte-in-Deutschland.txt");
$neu = fopen("../../../resources/txtFile/stadtNeu.txt", "w");

foreach ($alt as $data) {
  $hilf = explode(";", $data);
  if (strlen($hilf[0]) == 4) {
    fwrite($neu, "0");
  }
  fwrite($neu, "$hilf[0];$hilf[1];$hilf[2];$hilf[3];$hilf[4];$hilf[5]");
  // fwrite($neu, $hilf[0] . ";" . $hilf[1] . ";" . $hilf[2] . ";" . $hilf[3] . ";" . $hilf[4] . ";" . $hilf[5]);
}

fclose($neu);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>