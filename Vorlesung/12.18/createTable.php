<?php
$site_name = 'CREATE TABLE';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<table>

  <?php

  include("../../resources/database/dbConnect.php");

  $sql = "CREATE TABLE IF NOT EXISTS personal
        (
          PersonalID int AUTO_INCREMENT PRIMARY KEY,
          Anrede varchar(10),
          Nachname varchar(20),
          Vorname varchar(20),
          Plz varchar(5),
          Ort varchar(30),
          Gehalt float
        ) 
        Engine=InnoDB;";

  mysqli_query($con, $sql);

  $sql = "INSERT INTO personal
        (
          Anrede,Vorname,Nachname,PLZ, Ort, Gehalt
          ) 
        VALUES
        (
          'Herr','Ahmad','Buzzer','20097','Hamburg',2500
        );";
  mysqli_query($con, $sql);

  $sql = "INSERT INTO personal
        (
          Anrede,Vorname,Nachname,PLZ, Ort, Gehalt
        ) 
        VALUES
        (
          'Frau','Ute','Schmidt','22085','Hamburg',2500
        );";
  mysqli_query($con, $sql);

  // Anzeige
  $sql = "SELECT * FROM personal;";
  $liste = mysqli_query($con, $sql);

  // COLUMN Header
  $zeile = mysqli_fetch_assoc($liste);
  echo "<tr>";
  foreach ($zeile as $key => $value) {
    echo "<th>$key</th>";
  }
  echo "</tr>";

  // Neues Einlesen aller Daten der Abfrage
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