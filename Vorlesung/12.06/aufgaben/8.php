<?php
$site_name = 'Aufgabe 8';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Eine Funktion "intervall" bekommt zwei ganze Zahlen a und b übergeben und gibt
dann die Summe aller ganzen Zahlen in diesem Bereich (intervall) zurück. <br>
Beispiel: <br>
intervall(3, 7) ➡️ 3 + 4 + 5 + 6 + 7 = 25 <br>
intervall(20, 24) ➡️ 20 + 21 + 22 + 23 + 24 = 110';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="number" name="zahl1" placeholder="Zahl1 eingeben">
  <input type="number" name="zahl2" placeholder="Zahl2 eingeben">
  <button onclick="">absenden</button>
</form>

<?php

if (isset($_GET["zahl1"]) && $_GET["zahl2"]) {
  function intervall($a, $b)
  {
    $summe = 0;
    for ($a; $a <= $b; $a++) {
      $summe = $summe + $a;
    }
    return $summe;
  }

  echo intervall($_GET["zahl1"], $_GET["zahl2"]);
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>