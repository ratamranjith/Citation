<?php
include "database.php";
$id = $_POST['delete'];
$sql = " DELETE FROM `citation` WHERE `Id` = $id ";
if(mysql_query($sql))
{
	echo "ID NO: ".$id."has Been Successfully Deleted";
	$url = "citation.php";
	header("Refresh: 1;url=".$url);
}
else
{
	echo mysql_error();
}
?>