<?php
$site_name = 'Testklausur Aufgabe 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = '
<ul>
Gegeben ist folgender Code <br>
$versuch [2] = 69; <br>
$versuch [7] = 42; <br>
$versuch [44] = 47. 11; <br>
$versuch [12] = date ("Y"); <br>
$versuch [9] = 26; <br>
<li>Ist ein solches Array in PHP gültig?</li>
<li>Geben Sie alle Elemente in einer "Bullet List" aus!</li>
<li>
  Geben Sie das Array (Schlüssel und Werte) nach Inhalt numerisch sortiert
  als HTML-Tabelle aus.
</li>
</ul>';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$versuch[2] = 69;
$versuch[7] = 42;
$versuch[44] = 47.11;
$versuch[12] = date("Y");
$versuch[9] = 26;

echo "<ul>";
foreach ($versuch as $value) {
  echo "<li>$value</li>\n";
}
echo "</ul>";

asort($versuch);

echo "<table><tr><th>Key</th><th>Value</th></tr>";
foreach ($versuch as $x => $value) {
  echo "<tr><td>$x</td><td>$value</td></tr>\n";
}
echo "</table>";
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>