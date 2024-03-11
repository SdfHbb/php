<?php
$site_name = 'Aufgabe 4';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine Funktion "Pruef", welche true zurückgibt, wenn eine übergebene Zahl
eine gerade Zahl ist. <br>
<b>Hinweis:</b> true/false-Werte können nur indirekt über ein "IF" ausgeben werden.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="number" name="zahl1" placeholder="Zahl eingeben:" required>
  <button>absenden</button>
</form>

<?php


if (isset($_GET["zahl1"])) {
  function pruef($a)
  {
    $b = true;
    if ($a % 2 == 0) {
      return var_dump($b);
    } else {
      return var_dump(!$b);
      ;
    }
  }

  echo pruef($_GET["zahl1"]);
}

?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>