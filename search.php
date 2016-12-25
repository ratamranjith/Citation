<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Form</title>
<link href="Style/menu.css"  rel="stylesheet" />

</head>

<?php
$username="root";
$password="";
$database="journal";
$con=mysql_connect('localhost',$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$year1 = $_POST['year1'];
$year2 = $_POST['year2'];
$Journal = $_POST['Conf1'];
$query = "SELECT * FROM `citation` WHERE `Pgname` LIKE  $year1 
OR `Pgname` LIKE  $year2 OR `Conference` LIKE  '$Journal' 
OR `Jname` LIKE  '$Journal' ORDER BY `Pgname`";
$result = mysql_query($query,$con);
echo "<table  width='100%'  border='0'><tr id='border' height='60px'>
<td>ID</td>
<td>Author1</td>
<td>Author2</td>
<td>Author3</td>
<td>Article Name</td/>
<td>Journal Name</td>
<td>Conference</td>
<td>Publication</td>
<td>Volume No</td>
<td>Year</td>
<td>Pages</td>
<td>Month</td>
</tr>";


while($row = mysql_fetch_array($result))
{
	echo "<tr id='bor1'><td>";
	echo $row[0]."</td>";
	echo "<td>";
	echo $row[1]."</td>";
	echo "<td>";
	echo $row[2]."</td>";
	echo "<td>";
	echo $row[3]."</td>";
	echo "<td>";
	echo $row[4]."</td>";
	echo "<td>";
	echo $row[5]."</td>";
	echo "<td>";
	echo $row[6]."</td>";
	echo "<td>";
	echo $row[7]."</td>";
	echo "<td>";
	echo $row[8]."</td>";
	echo "<td>";
	echo $row[10]."</td>";
	echo "<td>";
	echo $row[9]."</td>";
	echo "<td>";
	echo $row[11]."</td></tr>";
	echo "<br>";
	
	
	/*
	fwrite($write,$row[0]);
	fwrite($write,"  ");
	fwrite($write,$row[1]);
	fwrite($write,"   ");
	fwrite($write,$row[2]);
	fwrite($write,"   ");
	fwrite($write,$row[3]);
	fwrite($write,"   ");
	fwrite($write,$row[4]);
	fwrite($write,"   ");
	fwrite($write,$row[5]);
	fwrite($write,"   ");
	fwrite($write,$row[6]);
	fwrite($write,"   ");
	fwrite($write,$row[7]);
	fwrite($write,"   ");
	fwrite($write,$row[8]);
	fwrite($write,"\n\n");
	fclose($write);
	*/
}
	

	
echo "</table>";
mysql_close();

?>
<br/>
<table align="center" width="600" border="0">
  <tr>
    <td height="47"><a href="insert.php" target="_self"><input type="Button" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" value="INSERT"/></a></td>
       <td height="47"><a href="Delete.php" target="_self"><input type="Button" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" value="DELETE"/></a></td>
     <td height="47"><a href="sequery.php" target="_self"><input type="Button" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" value="SEARCH"/></a></td><td>
     <td height="47"><a href="File.php" target="_self"><input type="Button" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" value="SAVE"/></a></td><td>

     <input type="button" value="PRINT" style="background-image:url(image/database.jpg) ;height:30px; width:80px; color:#FFF" onClick="window.print()"></td>
  </tr>
</table>
<body>
</body>
</html>