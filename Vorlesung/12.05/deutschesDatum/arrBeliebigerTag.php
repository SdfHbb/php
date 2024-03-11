<!DOCTYPE HTML>
<html>

<head>
  <title></title>
</head>

<body>
  <?php
  $datum = mktime(0, 0, 0, $_POST["m"], $_POST["t"], $_POST["j"]);
  // $datum=mktime(0,0,0, rand(1,12), rand(1,31),rand(1800,2250));
  $monate = explode(" ", "nix Januar Februar M&aumlrz April Mai Juni Juli August September Oktober November Dezember");

  $tage = array(
    "Mon" => "Montag", "Tue" => "Dienstag",
    "Wed" => "Mittwoch", "Thu" => "Donnerstag",
    "Fri" => "Freitag", "Sat" => "Samstag",
    "Sun" => "Sonntag"
  );


  echo $tage[date("D", $datum)] . ", der ";
  echo date("j", $datum) . ". ";
  echo $monate[date("n", $datum)] . " ";
  echo date("Y", $datum);


  ?>
</body>

</html>