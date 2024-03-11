<?php
$site_name = 'Login mit Captcha';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = '4 Formulare <br>
<ul>
<li>index.php</li>
<li>logIn.php</li>
<li>member.php</li>
<li>logout.php</li>
</ul> ';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="logIn.php" method="POST">
  <input type="text" name="user" value="007">
  <input type="password" name="pass" value="geheim!">
  <img src="../../../resources/phPaint/captcha/bild_capture.php" alt="" width="275" height="183">
  <input type="text" name="eingabe" placeholder="Bitte captcha eingeben">
  <button>absenden</button>
</form>

<?php
session_start();
$_SESSION["startzeit"] = date("d.m.Y, H:i:s");

if (isset($_SESSION["login"]) == "falsches Passwort!") {
  echo "<b>Falsche Zugangsdaten eingegeben!</b>";
}

echo '<pre>', var_dump($_SESSION), '</pre>';

if (isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["eingabe"])) {
  // $_SESSION["user"] = $_POST["user"];
  // $_SESSION["passwort"] = $_POST["pass"];
  // $_SESSION["input"] = $_POST["eingabe"];




  // if ($_SESSION["input"] == $_SESSION["cap"]) {
  //   $_SESSION["login"] = true;
  //   header("location:member.php");
  // } else {
  //   header("location:#");
  // }

}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>