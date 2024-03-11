<?php
$site_name = 'Aufgabe 10';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine eigene Schaltjahresfunktion, die anhand einer übergebenen Jahreszahl ein True (für Schaltjahr) oder False (kein Schaltjahr) zurückgibt.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="" method="get">
  <input type="number" name="jahr" placeholder="jahr eingeben">
  <button>check</button>
</form>

<?php
if (isset($_GET["jahr"])) {
  function schaltjahr($jahr)
  {
    if (($jahr % 4 == 0 && $jahr % 100 != 0) || $jahr % 400 == 0) {
      echo "schaltjahr";
    } else {
      echo "kein schaltjahr";
    }
  }

  echo schaltjahr($_GET["jahr"]) . "<br>";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>