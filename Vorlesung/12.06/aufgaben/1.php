<?php
$site_name = 'Aufgabe 1';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie den Code für die Funktion "euro()" zur Umrechnung eines DM-Betrages in Euro; ein Euro entspricht 1,95583 DM';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="number" name="eingabe" step="0.01" placeholder="DM-Betrag eingeben:">
  <button>absenden</button>
</form>

<?php

if (isset($_GET["eingabe"])) {
  function umrechner($a)
  {
    return number_format($a / 1.95583, 2, ",", ".") . "€";
    // alternativ
    // return round($dm / 1.95583, 2);
  }

  echo umrechner($_GET["eingabe"]);
}

?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>