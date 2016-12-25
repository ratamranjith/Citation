<?php
require "database.php";

//$field1_name = $_POST['AId'];
$field2_name = $_POST['Auname'];
$field3_name = $_POST['Atitle'];
$field4_name = $_POST['jname'];
$field5_name = $_POST['pname'];
$field6_name = $_POST['vname'];
$field7_name = $_POST['yname'];
$field8_name = $_POST['mname'];
$field9_name = $_POST['pgname'];
$field10_name = $_POST['Auname2'];
$field11_name = $_POST['Auname3'];
$field12_name = $_POST['Conference'];

$query = "INSERT INTO `citation`(`Id`, `Atitle`, `Auname`, `Auname2`,`Auname3`, `Jname`,`Conference`, `Pname`, `Vname`, `Pgname`, `Yname`, `Mname`  ) 
VALUES ('','$field2_name','$field3_name','$field10_name','$field11_name','$field4_name','$field12_name','$field5_name','$field6_name','$field9_name',$field7_name,'$field8_name' )";
if(mysql_query($query))
{
mysql_close();
header("location:citation.php");
}
else
{
	echo mysql_error();
}

?>
