<?php
$site_name = 'Testklausur Aufgabe 7';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Füllen Sie ein ARRAY mit einigen Autokennzeichen und Städtenamen:
  B => Berlin
  HH => Hansestadt Hamburg
  HWI => Hansestadt Wismar
  MD => Magdeburg
  S => Stuttgart
  HRO => Hansestadt Rostock
  M => München
  MZ => Mainz
<ul>
<li>
  Geben Sie die Städtenamen alphabetisch aufsteigend sortiert wieder aus,
  je Stadt 1 Zeile. (als HTML "Bullet-List" oder nummerierte Liste)
</li>
<li>
  Geben Sie Autokennzeichen und Städtenamen nach Kennzeichen sortiert in einer kleinen HTML-Tabelle (mit 2 Spalten logischerweise) wieder aus.
</li>
<li>
  Exportieren Sie die Daten aus der Datei in eine sequentielle Datei "Kfz.txt",
  Feldtrenner soll die Raute("#") sein.
</li>
<li>
  <b>Extras:</b><br>
  Suchen Sie den Ort "Hamburg" (was sonst?!?) in dem Array, im Erfolgsfalle soll
  "Hummel Hummel!" ausgeben werden, ansonsten "So\'n Schiet aber ook!"
</li>
</ul>
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$kennz = array(
  "B" => "Berlin",
  "S" => "Stuttgart",
  "HH" => "Hansestadt Hamburg",
  "HRO" => "Hansestadt Rostock",
  "HWI" => "Hansestadt Wismar",
  "M" => "Muenchen",
  "MD" => "Magdeburg",
  "MZ" => "Mainz"
);

asort($kennz);
$kfz = fopen("../../resources/txtFile/kfz.txt", "w");
foreach ($kennz as $i => $x) {
  fwrite($kfz, "$i#$x\n");
}
fclose($kfz);

ksort($kennz);
echo "<ul>";
foreach ($kennz as $value) {
  echo "<li>$value</li>";
  $gesucht = $value == "Hamburg" ? "Hummel Hummel!" : "So\'n Schiet aber ook!";
}
echo "</ul><hr>";

echo $gesucht . "<hr>";

echo "<table> <tr><th>Kennzeichen</th><th>Ort</th></tr> ";
foreach ($kennz as $key => $value) {
  echo "<tr><td>$key</td><td>$value</td></tr>\n";
}
echo "</table>";

?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>