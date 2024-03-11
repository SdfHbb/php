<?php
session_start();
$user["007"] = "geheim!";
$user["0815"] = "WasDas?";
$user["Balu"] = "dschungel";
$user["Queen"] = "King";

if (
  isset($_POST["user"]) &&
  isset($_POST["pass"]) &&
  isset($_POST["eingabe"]) &&
  isset($_SESSION["startzeit"])
) {
  $_SESSION["user"] = $_POST["user"];

  if (
    $_SESSION["cap"] == $_POST["eingabe"] &&
    $user[$_POST["user"]] == $_POST["pass"]
  ) {
    $_SESSION["login"] = true;
    header("Location:member.php");
  } else {
    $_SESSION["login"] = "falsches Passwort!";
    header("Location:index.php");
  }
} else {
  header("Location:index.php");
}
?>