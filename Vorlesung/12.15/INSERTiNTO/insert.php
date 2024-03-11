<?php
$site_name = 'INSERT';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'gespeicherter Datensatz';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>

  <?php
  include("../../../resources/database/dbConnect.php");

  $k = $_POST["kategoriename"];
  $b = $_POST["beschreibung"];

  $sql = "INSERT INTO artikelkategorien
          (
            Kategoriename, 
            Beschreibung
          )
          VALUES ('$k','$b');";

  mysqli_query($con, $sql);
  echo mysqli_affected_rows($con) . "Sätze eingefügt";

  // Anzeige
  $sql = "SELECT * 
          FROM artikelkategorien";

  mysqli_query($con, $sql);
  $liste = mysqli_query($con, $sql);

  $zeile = mysqli_fetch_assoc($liste);
  echo "<tr>";
  foreach ($zeile as $key => $value) {
    echo "<th>$key</th>";
  }
  echo "</tr>";

  $liste = mysqli_query($con, $sql);

  while ($zeile = mysqli_fetch_assoc($liste)) {
    echo "<tr>";
    foreach ($zeile as $value) {
      echo "<td>$value</td>";
    }
    echo "</tr>";
  }
  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>