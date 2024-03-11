<?php
// Array automatisch erzeugen 
$arr2 = range("a", "z");
print_r($arr2);
echo "<hr><br>";

// String Zeichenkete zerlegen
$arr2 = explode(" ", "a b c d e f g h k A B C D E F G H 2 3 5 60");

print_r($arr2);
echo "<hr><br>";

// Array zufällig durchmischen
shuffle($arr2);
print_r($arr2);
