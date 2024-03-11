<?php
$site_name = 'Deutsches Datumformat';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<?php
setlocale(LC_TIME, 'de_DE', 'de_DE.UTF-8');

$datum = date("d.m.Y");

$monate = explode(" ", "nix Januar Februar M�rz April Mai Juni Juli August September Oktober November Dezember");

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
  echo strtolower($y) . "<br>";
}
// Tag ausgeben
echo "<hr>";
echo $tage[date("D")];

// Monat ausgeben
echo "<hr>";
echo $monate[date("m")];

// Deutsches Datumsformat
echo "<hr>";
echo $tage[date("D")] . " ,der " . date("d") . " " . $monate[date("m")] . " " . date("Y") . "";
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>