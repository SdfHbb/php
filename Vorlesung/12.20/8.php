<?php
$site_name = 'Aufgabe 8 - Klausur';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Wir möchten Kunden und Freunde unserer Unternehmung in Zukunft mit einem monatlichen Newsletter beglücken. Dazu können die User sich bei uns per HTML-Formular eintragen. <br> <br>

Die Daten sollen zeilenweise in die sequentielle Textdatei "adress.csv" eingetragen werden, je Eintrag eine Zeile, Feldseparator soll die Raute ("#") sein. Neben Name und Email soll auto- matisch auch das Eintragsdatum in der Form "tt.mm.jj – hh:mm" und die IP-Adresse gespei- chert werden. Erstellen Sie den dazugehörigen Code für die Datei "eintragen.php". <br><br>

Hilfe: Die IP der User liegt in $_SERVER["REMOTE_ADDR"]
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>


<form action="eintragen.php" method="post"> Ihr Vorname:<br>
  <input type="Text" name="usr" size="20" required><br>
  Ihre Emailadresse:<br>
  <input type="Text" name="ml" size="20" required><br>
  <input type="Submit" value="Für den Newsletter eintragen">
</form>

<?php
$datei = fopen("adress.csv", "a");
$name = $_POST["usr"];
$mail = $_POST["ml"];
$datum = date("d.m.Y – H:i");
$ip = $_SERVER["REMOTE_ADDR"];

$zeile = $name . "#" . $mail . "#" . $datum . "#" . $ip . "\n";
fwrite($datei, $zeile);
fclose($datei);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>