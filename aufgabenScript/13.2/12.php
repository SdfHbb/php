<?php
$site_name = 'Brutto - Netto Rechner';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<form action="#" method="get">
  <input type="number" name="brutto" placeholder="Bruttogehalt eingeben:">
  <button>absenden</button>
</form>

<?php

if (isset($_GET["brutto"])) {

  $brutto = $_GET["brutto"];

  if ($brutto > 50000) {
    $steuerSatz = 50;
  } else if ($brutto > 25000) {
    $steuerSatz = 30;
  } else if ($brutto > 10000) {
    $steuerSatz = 20;
  } else {
    $steuerSatz = 10;
  }

  $steuer = $brutto * $steuerSatz / 100;
  $netto = $brutto - $steuer;

  echo "<br>Ihr Bruttogehalt betr&auml;gt: " . number_format($brutto, 2, ",", ".") . " &euro;";
  echo "<br>Ihr Steuerabzug betr&auml;gt: " . number_format($steuer, 2, ",", ".") . " &euro;";
  echo "<br>Ihr Nettogehalt betr&auml;gt: " . number_format($netto, 2, ",", ".") . " &euro;";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>