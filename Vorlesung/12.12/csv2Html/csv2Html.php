<?php
$site_name = 'csv2Html';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'csvDatei auslesen und eine Html-Datei erzeugen (kfz.html)';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php

$datei = fopen("../../../resources/txtFile/kfz.csv", "r");
$ziel = fopen("kfz.html", "w");

fwrite($ziel, '
<!DOCTYPE html>
<html lang="de">

<head>
  <title>Aufgabe 4<</title>
  <link rel="stylesheet" href="../../../resources/views/style.css" />
</head>

<body>
<div class="container">
<div class="box top"></div>
<div class="box content">
  <h3>Aufgabe 4</h3>

');


fwrite($ziel, "<ul>\n");

$teil = fgetcsv($datei, 2048, ";");
while (!feof($datei)) {
  fwrite($ziel, "<li>$teil[0] - $teil[1]</li>\n");
  $teil = fgetcsv($datei, 2048, ";");
}
fwrite($ziel, "</ul>");

readfile("kfz.html");

fwrite($ziel, '
</div>
<div class="box bottom"></div>
</div>
</body>
</html>');

fclose($datei);
fclose($ziel);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>