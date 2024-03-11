<?php
$site_name = 'CREATE FOREIGN KEY & add CONSTRAINT';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Fremdschlüssel erstellen und mit Primärschlüssel verbinden';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
include("../../resources/database/dbConnect.php");

$sql = "ALTER TABLE bestellungen 
        ADD COLUMN personalNR int;";
mysqli_query($con, $sql);

$sql = "ALTER TABLE bestellungen 
        ADD CONSTRAINT FKPersonal 
        FOREIGN KEY (personalNr) 
        REFERENCES personal(PersonalID);";
mysqli_query($con, $sql);

?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>