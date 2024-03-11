<?php
$site_name = 'Zahl im Array suchen';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<form action="#" method="get">
  <input type="number" name="zahl" placeholder="Zahl eingeben:">
  <button>absenden</button>
</form>

<?php
$arr1 = array(2, 4, 13, -4, 82, 17);
print_r($arr1);
echo "<br><br>";

if (isset($_GET["zahl"])) {
  $zahl1 = $_GET["zahl"];
  $gefunden = false;

  for ($i = 0; $i < count($arr1); $i++) {
    if ($arr1[$i] == $zahl1) {
      $index = $i;
      $gefunden = true;
    } else {
    }
  }

  if ($gefunden == true) {
    echo "Gesuchte Zahl gefunden: arr1[" . $index . "]";
  } else {
    echo "Zahl ist im Array nicht vorhanden";
  }
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>