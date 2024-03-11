<?php
$site_name = 'Aufgabe 6';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Eine Funktion "WorteZaehlen() bekommt einen Satz übergeben und gibt die Anzahl der Wörter in dem Satz zurück.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="text" name="eingabe" placeholder="Bitte Satz eingeben" value="dies ist ein text">
  <button onclick="">absenden</button>
</form>

<?php
if (isset($_GET["eingabe"])) {
  function worteZaehlen($a)
  {
    return count(explode(" ", $a));
  }

  echo worteZaehlen($_GET["eingabe"]);
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>