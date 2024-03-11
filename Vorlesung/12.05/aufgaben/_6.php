<?php
$site_name = 'Aufgabe 6';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Sie finden im Skript "php-kurs-ebook..." etwas besseres:
Eine Bildergalerie dynamisch aus einem Verzeichnis auf dem Server erstellen. Auch hier werden die Dateiname Strings in einem Array eingelesen.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>


<?php
$dir = "../../../resources/images/orte";  // Verzeichnis ggf. anpassen

if ($handle = opendir($dir)) {
  while (($datei = readdir($handle))) {
    $datei = $dir . "/" . $datei;
    if (filetype($datei) == "file" and substr($datei, -4) == ".jpg")
      $src[] = $datei;
  }
  closedir($handle);
}

shuffle($src);
//print_r($src);

for ($i = 0; $i < count($src); $i++) {
  echo "<img class='small' src=$src[$i] >";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>