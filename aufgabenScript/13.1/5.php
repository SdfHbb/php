<?php
$site_name = 'Benzinverbrauch-Rechner';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<form action="#" method="get">
  <input type="number" name="anfangKm" placeholder="Anfangskilometer eingeben:">
  <input type="number" name="endKm" placeholder="Endkilometer eingeben:">
  <input type="number" name="tankMenge" placeholder="Tankmenge eingeben:">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["anfangKm"]) && isset($_GET["endKm"]) && isset($_GET["tankMenge"])) {
  $erg = $_GET["tankMenge"] * 100 / ($_GET["endKm"] - $_GET["anfangKm"]);
  echo "Ihr Verbrauch beträgt " . $erg . " Liter pro 100km";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>