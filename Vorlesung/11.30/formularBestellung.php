<?php
$site_name = 'Formular i|o';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>

<form action="#" method="get">
  <input type="radio" name="gesch" value="weiblich" checked>W &nbsp;
  <input type="radio" name="gesch" value="männlich">M &nbsp;
  <input type="radio" name="gesch" value="divers">D<br>
  <select name="box">
    <option>Salat</option>
    <option>Pasta</option>
    <option>Pizza</option>
  </select> <br> <br>
  <button>senden</button>
</form>

<?php
if (isset($_GET["gesch"])) {
  $gesch = $_GET["gesch"];
  echo "Sie sind  " . $_GET["gesch"] . " und haben " . $_GET['box'] . " bestellt";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>