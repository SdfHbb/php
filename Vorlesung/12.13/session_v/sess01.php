<pre>
<?php
session_start();
$_SESSION["beginn"]=date("d.m.Y, H:i:s");
$_SESSION["login"]=true;
?>
<form action="sess02.php" method="post">
<input type="text" name="usr" value="gast">
<input type="submit">
</form>

</pre>

