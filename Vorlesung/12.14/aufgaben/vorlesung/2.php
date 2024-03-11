<!DOCTYPE HTML>
<html>

<head>
  <title></title>
  <style type="text/css">
    * {
      font-family: arial, univers, helvetica, sans-serif;
      font-size: 1em;
      margin: 30px;
    }

    table {
      border: 0px solid red;
      border-spacing: 0px;
    }

    tr:nth-child(even) {
      background-color: yellow;
    }
  </style>
</head>

<body>
  <?php
  if (isset($_POST["sel"])) {
    include("../../../../resources/database/dbConnect.php");
    $con = mysqli_connect($host, $user, $passw, $db);

    $sql = "SELECT * FROM Artikel 
            WHERE artikelname LIKE '%" . $_POST["sel"] . "%';";

    echo "<a href=\"index.html\">zurück</a>";
    echo "<table>";
    // Erzeugen einer Überschriftenzeile
    $liste = mysqli_query($con, $sql);
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
    header("Location:index.html");
  ?>
</body>

</html>