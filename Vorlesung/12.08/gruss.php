<?php
$site_name = 'Gruss';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Begrüßen Sie den Besucher Ihrer Webseite mit Namen und tageszeitabhängigem Gruß:
Guten Morgen / Guten Tag/ Guten Abend / Nanu, immer noch wach?';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$uhrzeit = date('h', mktime(rand(0, 23), 0, 0, 0, 0, 0));
echo "Es ist " . $uhrzeit . " Uhr <br>";

if ($uhrzeit >= 6 && $uhrzeit < 11) {
  echo "Guten Morgen!";
} else if ($uhrzeit >= 11 && $uhrzeit <= 18) {
  echo "Guten Tag";
} else if ($uhrzeit >= 19 && $uhrzeit <= 22) {
  echo "Guten Abend!";
} else if ($uhrzeit >= 23 || $uhrzeit <= 5) {
  echo "Immer noch wach?";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>