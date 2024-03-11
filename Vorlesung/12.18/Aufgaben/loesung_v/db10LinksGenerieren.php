<?php
include("db_connect.php");
/*
$sql="DROP TABLE if exists links";
mysqli_query($con,$sql);

$sql= "create table links (LinkID int auto_increment primary key, "
    . "Text varchar(30), Ziel varchar(200)) engine=innoDB;";
mysqli_query($con,$sql);

$liste=fopen("dateien/Links.txt","r");
$zeile=fgetcsv($liste,2048,"#");

while(!feof($liste)){
 $sql="insert into links(Text, Ziel) "
     ."values('$zeile[0]','$zeile[1]');";
 mysqli_query($con,$sql);
 $zeile=fgetcsv($liste,2048,"#");
}
fclose($liste);
*/
echo "<ul>";
$sql="select * from Links;";
$liste=mysqli_query($con,$sql);
while($zeile=mysqli_fetch_row($liste)){
 echo "<li><a href=".$zeile[2]." target=_blank>".$zeile[1]."</a></li>";
}
echo "</ul>";

?>