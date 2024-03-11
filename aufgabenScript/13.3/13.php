<?php
$site_name = 'Zinsrechner';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<form>
  <input type="number" name="anlage" placeholder="Anlagebetrag eingeben:" min="500" max="1000000" value="1000">
  <input type="number" name="zins" placeholder="Zinssatz eingeben:(min 0,5-9,9)" min="0.5" max="9.9" step="0.1"
    value="3.0">
  <input type="number" name="zeit" placeholder="Stehzeit eingeben (max 50):" min="1" max="50" value="5">
  <button type="submit">Senden</button>
</form>

<table>
  <tr>
    <th>Jahre</th>
    <th>Kapital</th>
    <th>Zinsen</th>
    <th>Neues Kapital</th>
  </tr>


  <?php

  if (isset($_GET["anlage"]) && isset($_GET["zins"]) && isset($_GET["zeit"])) {

    $start = $_GET["anlage"];
    $zinsSatz = $_GET["zins"];
    $zinsen = 0;
    $jahre = $_GET["zeit"];

    for ($i = 1; $i <= $jahre; $i++) {

      $endKapital = $start + ($start * $zinsSatz / 100);
      $zinsen = $endKapital - $start;

      echo "<tr><td>" . $i . "</td>";
      echo "<td>" . number_format((float) $start, 2, '.', '') . " € </td>";
      echo "<td>" . number_format((float) $zinsen, 2, '.', '') . " € </td>";
      echo "<td>" . number_format((float) $endKapital, 2, '.', '') . " € </td>";
      echo "</tr>";

      $start = $endKapital;
    }
  }
  ?>


  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
  ?>