<?php
$site_name = 'Aufgabe 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Die externen Links in einer Webseite sollen dynamisch aus einer Vorlagendatei
erstellt werden. Dazu wird eine Textdatei mit 2 Feldern erstellt: Text, Ziel. <br>
Diese Datei ist mit PHP auszulesen und in einer Webseite sind die Links dann
daraus zu erstellen. <br>
<b>Beispiel:</b><br>
Mein Haus#http://www.neuschwanstein.de/ <br>
Mein Garten#http://www.plantenunblomen.de/ <br>
Mein Auto#http://www.maybach.de/';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$datei = file("../../../resources/txtFile/links.txt");
$datei = array_reverse($datei);
// print_r($arr);

foreach ($datei as $value) {
  $teile = explode("#", $value);
  echo "<a href='" . $teile[1] . "'>" . $teile[0] . "</a> <br> ";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>