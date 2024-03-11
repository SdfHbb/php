<?php
session_start();
if(isset($_SESSION["login"])){
  $_SESSION["name"]=$_POST["usr"];
  echo "Hallo, ".$_SESSION["name"]."<br>";
  echo "Sie haben sich eingeloggt am ";
  echo $_SESSION["beginn"];

  echo "<br><a href=\"sess02b.php\">Weiter zu Seite 2b</a>";
}
else
  header ("Location:sess01.php");
?>

