<?php
$site_name = 'Aufgabe 8';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie die 6 Lottozahlen und die Superzahl der nächsten Ziehung in einer HTML-Tabelle sortiert aus. <br>
<b>Erweiterung (nicht ganz "ohne" für FIAE!):</b><br>
Lassen Sie den User in 6 Formularfeldern die Lottozahlen eingeben und vergleichen Sie diese mit
den gezogenen Zahlen.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="number" name="zahl1" placeholder="Zahl 1 eingeben:" min="1" max="49" value="1">
  <input type="number" name="zahl2" placeholder="Zahl 2 eingeben:" min="1" max="49" value="2">
  <input type="number" name="zahl3" placeholder="Zahl 3 eingeben:" min="1" max="49" value="3">
  <input type="number" name="zahl4" placeholder="Zahl 4 eingeben:" min="1" max="49" value="4">
  <input type="number" name="zahl5" placeholder="Zahl 5 eingeben:" min="1" max="49" value="5">
  <input type="number" name="zahl6" placeholder="Zahl 6 eingeben:" min="1" max="49" value="6">
  <input type="number" name="zahl7" placeholder="Superzahl eingeben:" min="1" max="49" value="48">
  <button>absenden</button>
</form>

<Table>
  <tr>
    <th>Lottozahlen</th>
    <th>Superzahl</th>
    </th>

    <?php
    if (
      isset($_GET["zahl1"]) &&
      isset($_GET["zahl2"]) &&
      isset($_GET["zahl3"]) &&
      isset($_GET["zahl4"]) &&
      isset($_GET["zahl5"]) &&
      isset($_GET["zahl6"]) &&
      isset($_GET["zahl7"])
    ) {
      $spieler = array(
        $_GET["zahl1"],
        $_GET["zahl2"],
        $_GET["zahl3"],
        $_GET["zahl4"],
        $_GET["zahl5"],
        $_GET["zahl6"],
        $_GET["zahl7"]
      );

      sort($spieler);

      $lotto = range(1, 49);
      Shuffle($lotto);

      $ziehung = array_slice($lotto, 0, 7);
      sort($ziehung);

      echo "Die Ziehung zum Sonntag:<br>";

      for ($i = 0; $i < count($ziehung) - 1; $i++) {
        if (in_array($ziehung[$i], $spieler)) {
          echo "<tr ><td style='background-color: hsl(123, 41%, 45%)'>" . $ziehung[$i] . " </td><td></td> </tr>";
        } else if ($i < count($ziehung) - 2) {
          echo "<tr><td>" . $ziehung[$i] . "</td><td></td> </tr>";
        } else if (in_array($ziehung[6], $spieler)) {
          echo "<tr><td></td><td style='background-color: hsl(123, 41%, 45%)'>" . $ziehung[6] . "</td></tr>";
        } else {
          echo "<tr><td></td><td>" . $ziehung[6] . "</td></tr>";
        }
      }
    }
    ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>