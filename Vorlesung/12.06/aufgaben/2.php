<?php
$site_name = 'Aufgabe 2';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Eine (eigene) Funktion "fakul()" berechnet die Fakultät einer übergebenen Zahl';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="number" name="eingabe" placeholder="Zahl eingeben:">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["eingabe"])) {
  function fakul($a)
  {
    $b = 1;
    while ($a >= 1) {
      $b *= $a;
      $a--;
    }
    return $b;
  }

  echo $_GET["eingabe"] . "! = " . fakul($_GET["eingabe"]);
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>