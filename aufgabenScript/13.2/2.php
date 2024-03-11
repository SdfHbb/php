<?php
$site_name = 'BMI Rechner';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<form action="#" method="get">
  <input type="number" name="groesse" placeholder="Größe eingeben in cm:" min="1" step="0.01">
  <input type="radio" name="gesch" value="frau" checked> Frau &nbsp;
  <input type="radio" name="gesch" value="mann"> Mann
  <button>absenden</button>
</form>

<?php
if (isset($_GET["groesse"]) && isset($_GET["gesch"])) {
  $nGewicht = $_GET["groesse"] - 100;

  ($_GET["gesch"] == "mann") ? ($iGewicht = $nGewicht * 0.9) : ($iGewicht = $nGewicht * 0.85);

  echo "Ihr Normalgewicht beträgt " . $nGewicht . "kg, Idealgewicht liegt bei "
    . $iGewicht . " kg.";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>