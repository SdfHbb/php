<?php
$site_name = 'Aufgabe 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Es sollen die Adressen (Firma, Straße, Plz, Ort, Land) aller Kunden aus Brasilien in die Datei "br.txt" exportiert werden. Trennzeichen zwischen den Feldern soll
die Raute ("#") sein.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
include("../../../resources/database/dbConnect.php");

$sql = "SELECT Firma, Straße, Plz, Ort, Land
        FROM kunden 
        WHERE LAND='Brasilien'
        ";

$result = mysqli_query($con, $sql);
$zeile = mysqli_fetch_assoc($result);

$datei = fopen("../../../resources/txtFile/br.txt", "w");

$text = "";
while ($zeile = mysqli_fetch_assoc($result)) {
  foreach ($zeile as $value) {
    $text .= $value . "#";
  }
  $text = trim($text, "#") . "\n";
  fwrite($datei, $text);
}

?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>