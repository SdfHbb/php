<?php
$site_name = 'Aufgabe 1';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erinnern Sie sich an die Postleitzahlendatei (stadtneu.txt), die Sie mit rein fünftselligen PLZ neu erstellt haben? Diese Datei importieren Sie bitte in unsere Nordwind-DB.
Dazu müssen Sie zuerst allerdings eine passende Tabelle erstellen, natürlich mit
"CREATE TABLE" per PHP-Skript!';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
include("../../../resources/database/dbConnect.php");

$sql = "CREATE TABLE IF NOT EXISTS orte
        (
          ID int AUTO_INCREMENT PRIMARY KEY,
          Plz varchar(5),
          Ort varchar(20),
          Kreisschluessel int(5),
          Kreis varchar(20),
          Laenderschluessel int(2),
          Bundesland varchar(20)
        ) Engine=InnoDB;";

mysqli_query($con, $sql);

$datei = file("../../../resources/txtFile/stadtNeu.txt");

array_shift($datei);

$i = 0;
foreach ($datei as $value) {
  $zeile = explode(";", $value);
  $sql = "INSERT INTO orte 
          (
            plz, 
            Ort, 
            Kreisschluessel, 
            Kreis, 
            Laenderschluessel,
            Bundesland
          )
          VALUES  
          (
          '$zeile[0]',
          '$zeile[1]',
          $zeile[2],
          '$zeile[3]',
          $zeile[4],
          '$zeile[5]'
          )";
  mysqli_query($con, $sql);
  $i++;
}
echo $i . " Datensätze importiert!";
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>