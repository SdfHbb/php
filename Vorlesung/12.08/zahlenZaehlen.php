<?php
$site_name = 'Zahlen zählen';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie in einem Formularfeld beliebig viele Zahlen durch Komma getrennt ein, 
und lassen Sie von einem Programm zählen, wie viele Werte es waren.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="" method="get">
  <input type="text" name="zahlen" placeholder="Ihre Zahlen bitte">
  <button>senden</button>
</form>

<?php

if (isset($_GET["zahlen"])) {
  // Variante 1
  $var = $_GET["zahlen"]; //"4, 5, 66, 53,2,1, 23";

  //$var=str_replace(' ','',$var);
  //echo $var;

  $var = explode(",", $var);
  echo "Es waren " . count($var) . " Zahlen. <br>";

  // Variante 2
  function zaehle(...$arr)
  {
    $text = implode(" ", $arr);
    $var = str_replace(',', ' ', $text);
    $text = explode(" ", $var);
    echo count($text);
  }

  echo zaehle($_GET["zahlen"]) . " Zahlen";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>