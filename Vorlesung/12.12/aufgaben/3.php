<?php
$site_name = 'Aufgabe 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine Liste der deutschen Monatsnamen in einer Datei "monate.de", diese Datei soll für die Ausgabe des Monatstextes in ein Array eingelesen werden.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$datei = fopen("../../../resources/txtFile/monate.txt", "w");

fwrite($datei, "0;nix\n1;Januar\n2;Februar\n3;März\n4;April\n5;Mai\n6;Juni\n7;Juli\n8;August\n9;September\n10;Oktober\n11;November\n12;Dezember");
fclose($datei);

$datei = file("../../../resources/txtFile/monate.txt");

foreach ($datei as $key => $value) {
  $line = explode(";", $value);
  // print_r($line);
  $neu[$line[0]] = $line[1];
}

foreach ($neu as $key => $value) {
  echo $value . "<br>";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>