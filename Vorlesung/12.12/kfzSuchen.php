<?php
$site_name = 'Array Index suchen';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = '  Suche nach einem Kennzeichen - Ausgabe des Ortes';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action='#' method='get'>
  <input type='text' name='kenn' placeholder='Kennzeichen eingeben:' value='HH'>
  <button>suchen</button>
</form>

<?php
if (isset($_GET["kenn"])) {

  $gesucht = $_GET["kenn"];
  $gefunden = false;

  $datei = fopen("../../resources/txtFile/kfz.csv", "r");
  $zeile = fgetcsv($datei, 2048, ";");
  while (!feof($datei)) {
    $neu[trim($zeile[0])] = $zeile[1];
    $zeile = fgetcsv($datei, 2048, ";");
  }
  fclose($datei);
  //print_r($neu);

  foreach ($neu as $key => $werte) {
    if ($gesucht == $key) {
      $gefunden = true;
      echo "<b>$key</b> = $werte<br>";
    }
  }

  if ($gefunden == false)
    echo "<b>$gesucht </b> ist nicht bekannt.";
}

?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>