<?php
$site_name = 'Klausur - Aufgabe 7';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Es wurden in einem HTML-Formlar beliebig viele Zahlen, durch Komma getrennt, eingegeben. Diese Werte werden über das Formularfeld "werte" an Ihr PHP-Programm übergeben. <br> <br>

Beispiel:	$_GET["werte"] enthält "8,14,37,4.571,964,47,28.5" <br><br>

Erstellen Sie je ein PHP-Skript-Fragment, das <br><br>

a)	das Feld $_GET["werte"] in ein neues Array $arrZ überträgt <br> <br>

b)	Den größten Wert, den kleinsten Wert und den Durchschnitt der Zahlen aus dem Array $ arrZ ermittelt und alle drei Werte ausgibt. <br>
(Betrachten Sie das Array als gefüllt, wenn Sie Teil 1 nicht gemacht haben!) <br> <br>

c)	Das neue Array $arrZ numerisch aufsteigend sortiert
und in einer "Bullet List"(je Element ein Aufzählungspunkt) wieder ausgibt <br>
(Betrachten Sie das Array als gefüllt, wenn Sie Teil 1 nicht gemacht haben!) <br><br>

Hinweis:	- Die Aufgabenteile können auch unabhängig voneinander gelöst werden!
- Fehlerprüfungen sind nicht gefordert. 
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
// $arrWerte["werte"] ➡️ $_GET['werte]
$arrWerte["werte"] = "8,14,37,4.571,964,47,28.5";

// a
$arrZ = explode(",", $arrWerte["werte"]);

// b
echo "Minimum: " . min($arrZ) . "<br>";
echo "Maximum: " . max($arrZ) . "<br>";
echo "Durchschnitt: " . array_sum($arrZ) / count($arrZ) . "<br>";
?>

<!-- c -->
<ul>
  <?php
  sort($arrZ);
  for ($i = 0; $i < count($arrZ); $i++) {
    echo "<li>" . $arrZ[$i] . "</li>";
  }
  ?>
</ul>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>