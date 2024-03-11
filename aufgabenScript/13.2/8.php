<?php
$site_name = 'Gehaltsrechner';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<form action="#" method="get">
  <input type="number" name="gehalt" placeholder="Gehalt eingeben:">
  <input type="radio" name="lohn" value="stunde" checked> Stundenlohn<br>
  <input type="radio" name="lohn" value="woche"> Wochenlohn <br>
  <input type="radio" name="lohn" value="monat"> Monatslohn <br>
  <button>absenden</button>
</form>

<?php
if (isset($_GET["gehalt"]) && isset($_GET["lohn"])) {

  if ($_GET["lohn"] == "stunde") {
    $erg = $_GET["gehalt"] * 2080;
  } else {
    ($_GET["lohn"] == "woche") ? ($erg = $_GET["gehalt"] * 52) : ($erg = $_GET["gehalt"] * 12);
  }

  echo "Ihr Jahresgehalt beträgt " . number_format($erg, 2, ",", ".") . "€";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>