<?php
$site_name = 'Aufgabe 5';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine Funktion "test_ipv4()", die Ihnen eine zufällige IP für Tests generiert.
Hilfe: 192.168.2.124 = 4 "Oktetts, jeweils mit Werten von 0-255.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
function test_ipv4()
{
  $erg = "";
  $arr = array("", ".", "", ".", "", ".", "");
  foreach ($arr as $key => $value) {
    if ($key % 2 == 0) {
      $value = rand(0, 255);
    }
    $erg .= $value;
  }
  return $erg;
}

// Version 2
function test_ipv4_1()
{
  return rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255);
}

// Version 3
function test_ipv4_2()
{
  $o1 = rand(0, 255);
  $o2 = rand(0, 255);
  $o3 = rand(0, 255);
  $o4 = rand(0, 255);

  return "$o1.$o2.$o3.$o4";
}

echo test_ipv4() . "<hr>";
echo test_ipv4_1() . "<hr>";
echo test_ipv4_2();
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>