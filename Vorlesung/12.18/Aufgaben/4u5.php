<?php
$site_name = 'Aufgabe 4 & 5';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = '
<ol  start="4">
<li>
  Die externen Links in einer Webseite sollen dynamisch aus einer DB-Tabelle
  erstellt werden. Dazu wird eine Datenbanktabelle mit 2 Text-Feldern erstellt: Text
  varchar(30), Ziel varchar(200). <br>
  Mein Haus#http://www.neuschwanstein.de/#ggf. Title <br>
  Mein Garten#http://www.plantenunblomen.de/#Title ... <br>
  Mein Auto#http://www.maybach.de/#Title ... <br>
</li>
<li>
  Zur vorigen Aufgabe erstellen Sie natürlich eine Webseite, die die Links dann
  anzeigt ...
</li>
</ol>';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
include("../../../resources/database/dbConnect.php");

$sql = "CREATE TABLE IF NOT EXISTS links 
          (
            ID int AUTO_INCREMENT PRIMARY KEY , 
            Text varchar(20),
            URL varchar(20)
          ) Engine=InnoDB;";

mysqli_query($con, $sql);

$datei = file("../../../resources/txtFile/links.txt");

foreach ($datei as $value) {
  $daten = explode("#", $value);
  $beschreibung = $daten[0];
  $url = $daten[1];
  $sql = "INSERT INTO links
          (
            Text, URL
          )
          VALUES 
          (
            '$beschreibung',
            '$url'
          )
          ";
  mysqli_query($con, $sql);
}

$sql = "SELECT * 
        FROM links";
$result = mysqli_query($con, $sql);
$zeile = mysqli_fetch_assoc($result);

while ($zeile = mysqli_fetch_assoc($result)) {
  echo '<a href="' . $zeile["URL"] . '">' . $zeile["Text"] . '</a><br>';
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>