<pre>
<?php
session_start();
if(isset($_SESSION["login"])){
 // var_dump($_SESSION);
  session_destroy();
  session_unset();
  $_SESSION="Sie wurden ausgeloggt";
  var_dump($_SESSION);
  //echo $_SESSION;
}
else
  header ("Location:sess01.php");
?>
</pre>