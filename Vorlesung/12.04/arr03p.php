<?php
$site_name = 'Assoziatives Array';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Index im Array suchen, Value ausgeben';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="text" name="land" placeholder="Land eingeben:">
  <button>suchen</button>
</form>

<?php
if (isset($_GET["land"])) {
  $datum["de"] = "Deutschland";
  $datum["it"] = "Italien";
  $datum["no"] = "Norwegen";
  $datum["nl"] = "Niederlande";
  $datum["pl"] = "Polen";
  $datum["ch"] = "Schweiz";

  $gefunden = " ";
  foreach ($datum as $key => $value) {
    if ($_GET["land"] == $key) {
      $gefunden = $key;
    }
  }

  if ($gefunden == " ") {
    echo " Das Land <b>[" . $_GET["land"] . "]</b> ist nicht im Array vorhanden: ";
  } else {
    echo " Das Land <b>[" . $_GET["land"] . "]</b> ist im Array vorhanden: " . $datum[$gefunden];

  }
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>