<?php
$site_name = 'UNION';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Zwei Tabellen vereinen, Anzeige des Datenursprungs über Spaltenkennziffer (L|K)';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>

  <?php
  include("../../resources/database/dbConnect.php");

  $sql = "SELECT Firma, 'L', Ort 
        FROM lieferanten 
        WHERE Land='Deutschland' 
      UNION 
        SELECT Firma, 'K', Ort 
        FROM kunden 
        WHERE Land='Deutschland'
      ORDER BY 1;";


  $liste = mysqli_query($con, $sql);
  $zeile = mysqli_fetch_assoc($liste);
  echo "<tr>";
  foreach ($zeile as $i => $wert) {
    echo "<th>$i</th>";
  }
  echo "</tr>";

  $liste = mysqli_query($con, $sql);

  while ($zeile = mysqli_fetch_assoc($liste)) {
    echo "<tr>";
    foreach ($zeile as $wert) {
      echo "<td>$wert</td>";
    }
    echo "</tr>";
  }

  echo "<br>" . mysqli_num_rows($liste) . " Datensätze ausgegeben."
    ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>