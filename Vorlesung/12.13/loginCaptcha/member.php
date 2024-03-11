<?php
session_start();
$site_name = 'Hallo ' . $_SESSION["user"];
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Du bist eingeloggt!';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="logout.php" method="POST">
  <button value="logout">abmelden</button>
</form>

<?php
echo '<pre>', var_dump($_SESSION), '</pre>';

if ($_SESSION["login"] != true) {
  header("Location:index.php");
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>