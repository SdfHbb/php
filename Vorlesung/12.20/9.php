<?php
$site_name = 'Klausur - Aufgabe 9';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Gegeben ist das folgende assoziative PHP-Array <br><br>

a)	Erstellen Sie den PHP-Code zur Sortierung des Arrays $kurz
nach den Indexwerten (aufsteigend)
und <br><br>
b)	Erstellen Sie den PHP-Code zur Ausgabe der Indexe und Werte untereinander in einer einfachen HTML-Bullet-List aus. <br> <br>

c)	Das Array wird mit dem Befehl "sort($kurz);" sortiert. <br>

<b>Geben Sie Schlüssel und Inhalte an! (Hier ist kein Code verlangt!!!)</b>
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$kurz = array(
  "de" => "Deutschland",
  "tv" => "Tuvalu",
  "ch" => "Schweiz",
  "hu" => "Ungarn",
  "es" => "Spanien",
  "uk" => "Großbritannien",
  "lv" => "Lettland"
);

// a
ksort($kurz);
?>
<!-- b -->
<ul>
  <?php
  foreach ($kurz as $key => $value) {
    echo "<li>Index: " . $key . " Wert: " . $value . "</li>";
  }
  ?>
</ul>

<!-- c 
  0 ➡️ Deutschland
  1 ➡️ Großbritannien
  2 ➡️ Lettland
  3 ➡️ Schweiz
  4 ➡️ Spanien
  5 ➡️ Tuvalu
  6 ➡️ Ungarn
-->


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>