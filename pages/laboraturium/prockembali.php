<?php
include ('../dbconnect.php');

$idant2 = $_POST['id'];
$querypanggil=$con->prepare("UPDATE `antrian` SET `STATUS`='1' WHERE `ID`='".$idant2."'");
$querypanggil->execute();

if ($querypanggil) {
	echo $idant2;
}
?>