<?php
$site_name = 'Aufgabe 2';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie die Datei "umsatz.txt", die die Umsätze <b>aller</b> Kunden enthält.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
include("../../../resources/database/dbConnect.php");
$sql = "SELECT Firma, sum(Anzahl * Einzelpreis)
        FROM kunden 
          LEFT JOIN bestellungen
            ON KundenId = KundenNr
          LEFT JOIN bestellungendetails 
            ON BestellId = BestellNr
          LEFT JOIN artikel
            ON ArtikelId = ArtikelNr
        GROUP BY Firma";

$result = mysqli_query($con, $sql);
$zeile = mysqli_fetch_assoc($result);

// $datei = fopen("umsatz.txt", "w");
$datei = fopen("../../../resources/txtFile/umsatz.txt", "w");

$text = "";
while ($zeile = mysqli_fetch_assoc($result)) {
  foreach ($zeile as $value) {
    $text .= $value . "#";
  }
  $text = rtrim($text, "#") . "\n";
  fwrite($datei, $text);
}

fclose($datei);
$con->close();
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>