<?php
$site_name = 'Logout';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Redirect in 3 sek';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
session_start();

if (isset($_SESSION["login"]) == true) {
  session_destroy();
  session_unset();
  $_SESSION = "leer";
  echo '<pre>', var_dump($_SESSION), '</pre>';
  // header("location: logIn.php");
  echo "Sie sind ausgeloggt, reload in 3 sekunden!";

  echo "<script type=\"text/javascript\">
  window.setTimeout('location.href=\"index.php\"', 3000);
  </script>";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>