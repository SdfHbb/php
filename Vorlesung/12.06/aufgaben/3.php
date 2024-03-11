<?php
$site_name = 'Aufgabe 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Eine Funktion soll das Teilen mit Rest (z.B. 14 : 3 = 4 Rest 2) realisieren. Dazu werden zwei Zahlen übergeben und die Funktion gibt einen String als Ergebnis zurück. <br>
Eine Division durch 0 soll mit einer Fehlermeldung (als Rückgabe!) quittiert werden.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="number" name="zahl1" placeholder="Zahl 1 eingeben:">
  <input type="number" name="zahl2" placeholder="Zahl 2 eingeben:">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["zahl1"]) && isset($_GET["zahl2"])) {
  function teilen($a, $b)
  {
    if ($b != 0) {
      $rest = $a % $b;
      $erg = ($a - $rest) / $b;
      return "$a / $b = $erg Rest $rest";
    } else {
      return "Division durch 0 nicht erlaubt!";
    }
  }

  echo teilen($_GET["zahl1"], $_GET["zahl2"]);
}

?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>