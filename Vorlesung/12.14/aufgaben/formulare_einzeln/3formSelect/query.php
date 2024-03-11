<?php
$host = "localhost";
$user = "root";
$passw = "";
$db = "nordwind";

$con = mysqli_connect($host, $user, $passw, $db);
$wahl = $_POST["tabellen"];
$sql = "Show COLUMNS from $wahl;";

echo "<table border>";
echo " <th colspan='12'>Tabelle $wahl</th>";

$liste = mysqli_query($con, $sql);
echo "<tr>";
while ($zeile = mysqli_fetch_row($liste)) {
  echo "<td>$zeile[0]</td>";
}
echo "</tr>";

$sql2 = "SELECT * FROM $wahl;";
$liste2 = mysqli_query($con, $sql2);

while ($zeile2 = mysqli_fetch_row($liste2)) {
  echo "<tr>";
  foreach ($zeile2 as $werte) {
    echo "<td>$werte</td>";
  }
  echo "</tr>";
}
echo "</table>";
