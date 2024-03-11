<?php
// Verbindung zur Datenbank herstellen
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// �berpr�fen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Wenn das Formular abgeschickt wurde, f�ge den Eintrag zur Datenbank hinzu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];
  $date = date("Y-m-d");
  $time = date("H:i:s");
  $ip = $_SERVER["REMOTE_ADDR"];

  $sql = "INSERT INTO guestbook (name, email, comment, date, time, ip)
  VALUES ('$name', '$email', '$comment', '$date', '$time', '$ip')";

  if ($conn->query($sql) === TRUE) {
    echo "Eintrag erfolgreich hinzugef�gt!";
  } else {
    echo "Fehler beim Hinzuf�gen des Eintrags: " . $conn->error;
  }
}

// Schlie�en Sie die Verbindung zur Datenbank
$conn->close();
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name"><br>
  E-Mail: <input type="text" name="email"><br>
  Kommentar: <textarea name="comment"></textarea><br>
  <input type="submit" value="Eintrag hinzuf�gen">
</form>