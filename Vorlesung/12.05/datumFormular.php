<?php
$site_name = 'Deutsches Datumformat mit Formulareingabe';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<form action="#" method="get">
  <input type="number" name="tag" placeholder="Tag:" min="1" max="31" value="13">
  <input type="number" name="monat" placeholder="Monat:" min="1" max="12" value="4">
  <input type="number" name="jahr" placeholder="Jahr:" min="1800" max="2200" value="2013">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["tag"]) && isset($_GET["monat"]) && isset($_GET["jahr"])) {
  setlocale(LC_TIME, 'de_DE', 'de_DE.UTF-8');

  $datum = date("d.m.Y");

  $monate = explode(" ", "nix Januar Februar März April Mai Juni Juli August September Oktober November Dezember");

  $tage = array(
    "Mon" => "Montag",
    "Tue" => "Dienstag",
    "Wed" => "Mittwoch",
    "Thu" => "Donnerstag",
    "Fri" => "Freitag",
    "Sat" => "Samstag",
    "Sun" => "Sonntag"
  );

  $datum = mktime(0, 0, 0, $_GET["monat"], $_GET["tag"], $_GET["jahr"]);
  echo $tage[date("D", $datum)] . ", der " . date("d", $datum) . " " . $monate[date("n", $datum)] . " " . date("Y", $datum) . "";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>