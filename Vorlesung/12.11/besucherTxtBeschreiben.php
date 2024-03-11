<?php
include("../../resources/function/testdaten.php");
$datei = fopen("../../resources/txtFile/besucher.txt", "a");

for ($i = 1; $i <= 100; $i++) {
  $ip = test_ipv4();
  $uhrzeit = uhrzeit();
  $datum = datum();
  $zahl = wort();

  $key = $datum . ";" . $uhrzeit . ";" . $ip . ";" . $zahl . "\n";

  fwrite($datei, $key);
}
fclose($datei);
