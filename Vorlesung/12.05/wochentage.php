<?php
$site_name = 'Datum';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Ausgabe des Array für Wochentage 
<ul>
<li>Anzeige nur der ersten beiden Buchstaben des Index</li>
<li>die Werte zufällig angeordnet und in Kleinbuchstaben</li>
</ul> ';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$tage = array(
  "Mon" => "Montag",
  "Tue" => "Dienstag",
  "Wed" => "Mittwoch",
  "Thu" => "Donnerstag",
  "Fri" => "Freitag",
  "Sat" => "Samstag",
  "Sun" => "Sonntag"
);

// $b = implode("<br>", $tage);
// echo $b;

foreach ($tage as $key => $y) {
  echo substr($y, 0, 2) . " : ";
  echo strtolower(str_shuffle($y)) . "<br>";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>