<?php
$username="root";
$password="";
$database="journal";
$con=mysql_connect('localhost',$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$field1 = $_POST['AId'];
$field2 = $_POST['Auname'];
$field3 = $_POST['Atitle'];
$field4 = $_POST['jname'];
$field5 = $_POST['pname'];
$field6 = $_POST['vname'];
$field7 = $_POST['yname'];
$field8 = $_POST['mname'];
$field9 = $_POST['pgname'];
$field10 = $_POST['Auname2'];
$field11 = $_POST['Auname3'];


$query="Update citation set Atitle='$field3',Auname='$field2',Auname2='$field10',Auname3='$field11',Jname='$field4',Pname='$field5',Pgname='$field6',Yname='$field7', Mname='$field8' where Id=$field1";
//$query = " UPDATE `citation` SET  `Atitle`=`$field3`,`Auname`=`$field2`,`Jname`=`$field4`,`Pname`=`$field5`,`Vname`=`$field6`,`Pgname`=`$field9`,`Yname`=`$field7`,`Mname`=`$field8` WHERE `Id` = $field1  ";

if($result = mysql_query($query,$con))
{
echo "Updated Successfully";
echo $result;
$url = "citation.php";
header('Refresh: 3 ; url='.$url);
}
else
{
	echo mysql_error();
}




?>
