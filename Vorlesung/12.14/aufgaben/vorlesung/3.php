<!DOCTYPE HTML>
<html>

<head>
  <title></title>
  <style type="text/css">
    * {
      font-family: arial, univers, helvetica, sans-serif;
      font-size: 1em;
      margin: 10px;
    }

    table {
      border: 0px solid red;
      border-spacing: 0px;
    }

    th,
    td {
      padding: 10px;
    }

    tr:nth-child(even) {
      background-color: yellow;
    }

    b {
      color: red;
    }
  </style>
</head>

<body>
  <?php
  if (isset($_POST["sel"])) {
    include("../../../../resources/database/dbConnect.php");
    $con = mysqli_connect($host, $user, $passw, $db);

    $gesucht = "%" . $_POST["sel"] . "%";

    $sql = "SELECT * 
            FROM kunden 
            WHERE firma LIKE '$gesucht' 
            OR kontaktperson LIKE '$gesucht'
            OR ort LIKE '$gesucht'
            OR straße LIKE '$gesucht'";

    echo "<a href=\"index.html\">zurück</a>";
    $liste = mysqli_query($con, $sql);
    if (mysqli_num_rows($liste)) {
      echo "<table>";
      $zeile = mysqli_fetch_assoc($liste);
      echo "<tr>";
      foreach ($zeile as $key => $value) {
        echo "<th>$key</th>";
      }
      echo "</tr>";

      //Neues Einlesen aller Daten der Abfrage
      $liste = mysqli_query($con, $sql);

      while ($zeile = mysqli_fetch_assoc($liste)) {
        echo "<tr>";
        foreach ($zeile as $value) {
          echo "<td>$value</td>";
        }
        echo "</tr>";
      }

      echo "</table>";
    } else
      echo "<br><br><b>Nichts gefunden.</b>";
  } else
    header("Location:index.html");
  ?>
</body>

</html>