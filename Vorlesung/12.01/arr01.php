<?php
// Array mit unterschiedlichen Datentypen
$array01 = array(1, 14, 25, 59, "Freitag", 6, 1.28, 4, true);

var_dump($array01);
echo "<hr>";

// Array mit Zufallszahlen
for ($i = 0; $i < 10; $i++) {
  $array01[$i] = rand(0, 100);
  echo $array01[$i] . " ";
}

// Array sortieren
sort($array01);
echo "<hr>";

for ($i = 0; $i < count($array01); $i++) {
  echo $array01[$i] . " ";
}

echo "<br>";
var_dump($array01);
echo "<hr>";

// Array Minimum, Maximum und Durchschnitt
echo "Minimum: " . min($array01) . "<br>";
echo "Maximum: " . max($array01) . "<br>";
echo "Durchschnitt: " . array_sum($array01) / count($array01) . "<br>";
