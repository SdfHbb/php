<?php
$site_name = 'Volumen eines Quaders berechnen';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<form action="#" method="get">
  <input type="number" name="erste" placeholder="Erste Seite eingeben:">
  <input type="number" name="zweite" placeholder="Zweite Seite eingeben:">
  <input type="number" name="dritte" placeholder="Dritte Seite eingeben:">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["erste"]) && isset($_GET["zweite"]) && isset($_GET["dritte"])) {
  $erg = $_GET["erste"] * $_GET["zweite"] * $_GET["dritte"];
  echo "Das Volumen von " . $_GET["erste"] . " * " . $_GET["zweite"] . " * " . $_GET["dritte"] . " = " . $erg;
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>