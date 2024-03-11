<pre>
<?php
include("../../resources/database/dbConnect.php");

// $sql = 'SELECT Firma, Ort, Land FROM kunden;';
// $sql = 'SELECT * FROM artikelkategorien;';

// alle Tabellen anzeigen
// $sql = 'SHOW tables';

$liste = mysqli_query($con, $sql);

// $zeile = mysqli_fetch_assoc($liste);
// $zeile = mysqli_fetch_array($liste, MYSQLI_BOTH);
// $zeile = mysqli_fetch_row($liste);

while ($zeile = mysqli_fetch_row($liste)) {
  // echo $zeile[0] . " - " . $zeile[1] . " - " . $zeile[2] . "<br>";
  // echo "$zeile[0] - $zeile[1] - $zeile[2] <br>";

  foreach ($zeile as $wert) {
    echo "$wert ";
  }
  echo "<br>";
}



var_dump($zeile);

?>

</pre>