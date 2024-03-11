<?php
$site_name = 'Klausur - Aufgabe 4';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine PHP-Funktion "divrest(a, b)",
die das gute alte Teilen mit Rest, z.B. 14 : 3 = 4 Rest 2, realisiert. <br>

Dazu werden zwei Zahlen übergeben und die Funktion gibt einen String als Ergebnis zurück. Eine Prüfung auf negative Werte ist nicht verlangt, aber bei Division durch 0 ist "#DivByZero" zurückzugeben! <br>

Beispiele: <br>
$erg = divrest(12, 5);	➡️ 2 Rest 2 <br>
$erg = divrest(12, 4);	➡️ 3 Rest 0 <br>
echo divrest(8, 9);	➡️ 0 Rest 9 <br>
echo divrest(888,0);	➡️	"#DivByZero"
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
function divrest($a, $b)
{
  $r = "";

  if ($b == 0) {
    return "#DivByZero";
  } else {
    $r = $a % $b;
    $zahl = ($a - $r) / $b;
    return $zahl . " Rest " . $r;
  }

}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>