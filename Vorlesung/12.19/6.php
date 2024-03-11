<?php
$site_name = 'Testklausur Aufgabe 6';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine Funktion "vol ( ) "
die aus 1 oder 3 übergebenen Werten das Volumen eines Quaders berechnet. <br> (Formel für das Volumen: V = a * b * c) <br><br>
Wird dabei nur 1 Wert übergeben, ist von einem Würfel auszugehen,
bei 3 Werten sei es ein Quader. <br><br>
Werden keiner, zwei oder mehr als drei Werte übergeben, ist *Fehler" zurückzugeben,
sonst das korrekte Ergebnis. <br> Eine zusätzliche Prüfung auf Übergabe von 0, negativen Werten
oder gar Texten ist nicht verlangt. <br><br>
<b>Aufrufbeispiele:</b>
<ol>
<li>$z = vol($_GET["a"], $_GET["b"], $_GET["c"]);</li>
<li>echo vol($y);</li>
<li>echo vol(); ➡️ liefert "#Fehler"</li>
<li>$x = vol(1, $e); ➡️ liefert "#Fehler"</li>
</ol>
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
function vol(...$a)
{
  if (count($a) == 1)
    return $a[0] * $a[0] * $a[0];
  else if (count($a) == 3)
    return $a[0] * $a[1] * $a[2];
  else
    return "#Fehler";
}

echo vol(3, 5, 4, 55) . "<br>";
echo vol(3, 5, 4) . "<br>";
echo vol(3);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>