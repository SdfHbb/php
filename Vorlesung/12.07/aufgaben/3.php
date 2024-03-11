<?php
$site_name = 'Aufgabe 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine Funktion "uhrzeit()", die Ihnen eine zufällige Uhrzeit für spätere Testdaten generiert. Eine Gültige Uhrzeit liegt zwischen 00:00 Uhr und 23:59 Uhr.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>


<?php
function uhrzeit()
{
  $datum = date('H:i:s', mktime(rand(0, 23), rand(0, 59), rand(0, 59), 0, 0, 0));
  echo $datum;
}

echo uhrzeit();
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>