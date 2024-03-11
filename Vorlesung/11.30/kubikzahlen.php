<!DOCTYPE HTML>
<html>

<head>
  <title></title>
  <style type="text/css">
    td {
      width: 150px;
      text-align: center;
    }

    tr:nth-child(even) {
      background-color: yellow;
    }

    tr,
    td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <table>
    <?php

    for ($a = 1; $a <= 20; $a++) {
      echo "<tr >";
      $b = $a * $a;
      echo "<td>$a x $a  = $b</td>";
      $b *= $a; // $b=$b*$a
      echo "<td>$a x $a x $a = $b</td>";
      echo "</tr>";
    }

    ?>
  </table>
</body>

</html>