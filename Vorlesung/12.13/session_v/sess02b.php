<?php
session_start();
echo "Hallo, ".$_SESSION["name"];
echo ", hier ist seite 2b";

?>
<a href="sess03.php">Weiter</a>