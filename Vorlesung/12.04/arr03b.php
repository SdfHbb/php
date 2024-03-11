<?php
$site_name = 'Assoziatives Array';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Index im Array suchen, Value ausgeben';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>
<p class="left">
  <?php
  $kennzeichen["de"] = "Deutschland";
  $kennzeichen["it"] = "Italien";
  $kennzeichen["no"] = "Norwegen";
  $kennzeichen["nl"] = "Niederlande";
  $kennzeichen["pl"] = "Polen";
  $kennzeichen["ch"] = "Schweiz";

  $tage = "de";
  $schalter = false;

  // Array ausgeben mit foreach()
  foreach ($kennzeichen as $key => $value) {
    echo "[$key] $value<br>";
  }
  echo "<hr>";

  //Version 1
  echo "<h3> Version 1 <h3> ";
  if (isset($kennzeichen[$tage]))
    echo "$kennzeichen[$tage] gefunden<hr>";
  else {
    echo "$tage ist nicht in der Liste<hr>";
  }

  // Version 2
  echo "<h3> Version 2 <h3> ";
  foreach ($kennzeichen as $i => $wert) {
    if ($i == $tage) {
      $schalter = true;
    }
  }

  if ($schalter == true)
    echo "$kennzeichen[$tage] gefunden<hr>";
  else
    echo "$tage ist nicht in der Liste<hr>";

  // Version 3
  echo "<h3> Version 3 <h3> ";
  if (array_key_exists($tage, $kennzeichen)) {
    echo $kennzeichen[$tage] . " gefunden";
  } else
    echo "$tage ist nicht in der Liste";

  ?>
</p>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>