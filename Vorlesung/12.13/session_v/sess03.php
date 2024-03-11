<pre>
<?php
session_start();
echo "Hallo, ".$_SESSION["name"];
echo ", hier kannst Du Dich ausloggen";
?>
<form action="sess04.php" method="post">
  <input type="submit" value="logout">
</form>
</pre>