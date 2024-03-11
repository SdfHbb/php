<?php
$site_name = 'Taschenrechner';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<form action="#" method="get">
  <input type="number" name="erste" placeholder="Erste Zahl eingeben:">
  <input type="radio" name="oper" value="+" checked> + &nbsp;
  <input type="radio" name="oper" value="-"> - &nbsp;
  <input type="radio" name="oper" value="*"> * &nbsp;
  <input type="radio" name="oper" value="/"> / &nbsp;
  <input type="number" name="zweite" placeholder="Zweite Zahl eingeben:">
  <button>absenden</button>
</form>

<?php

if (isset($_GET["erste"]) && isset($_GET["oper"]) && isset($_GET["zweite"])) {

  if ($_GET["oper"] == "+") {
    $erg = $_GET["erste"] + $_GET["zweite"];
  } else if ($_GET["oper"] == "-") {
    $erg = $_GET["erste"] - $_GET["zweite"];
  } else if ($_GET["oper"] == "*") {
    $erg = $_GET["erste"] * $_GET["zweite"];
  } else if ($_GET["oper"] == "geteilt" || $_GET["zweite"] == 0) {
    echo "Division durch 0 nicht möglich! ";
    die();
  } else {
    $erg = $_GET["erste"] / $_GET["zweite"];
  }

  echo $_GET["erste"] . " " . $_GET["oper"] . " " . $_GET["zweite"] . " = " . $erg;
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>