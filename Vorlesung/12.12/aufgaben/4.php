<?php
$site_name = 'Aufgabe 4';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie ebenfalls eine Datei für die Wochentage. Für diese Tage gilt allerdings der Zusatz, dass das entsprechende Array assoziativ sein soll und daher die englischen Tageskürzel mit im Datensatz sein müssen!';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$datei = fopen("../../../resources/txtFile/tage.txt", "w");

fwrite($datei, "Mon;Montag\nTue;Dienstag\nWed;Mittwoch\nThu;Donnerstag\nFri;Freitag\nSat;Samstag\nSun;Sonntag");

$datei = file("../../../resources/txtFile/tage.txt");

foreach ($datei as $key => $value) {
  $line = explode(";", $value);
  $neu[$line[0]] = $line[1];
}

foreach ($neu as $key => $value) {
  echo "[" . $key . "] " . $value . "<br>";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>