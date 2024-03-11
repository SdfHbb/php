<?php
$site_name = 'Klausur - Aufgabe 6';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie NUR eine Funktion "km( )", die Schritte in Kilometer umrechnet. Die Anzahl der Schritte ist der erste Übergabeparameter, optional kann ein zweiter Wert mit der Schrittlänge (in Meter) an die Funktion übergeben werden. <br>

Wird kein zweiter Wert übergeben, ist mit einer Default-Schrittlänge von 0,8 m zu rechnen! Weitere Fehlerprüfungen sind nicht verlangt.
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
function km($a, $b = 0.8)
{
  return $a * $b / 1000;
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>