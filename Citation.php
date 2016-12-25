<html>
<body>
<style  type="text/css">
#tr 
{
	
	border-top-left-radius:18px;
	background-color:#00F;
	color:#FFF;
}
#r
{
	background-color:#00F;
	color:#FFF;
	text-align:center;
}
#tr1 
{
	
	border-top-right-radius:18px;
	background-color:#00F;
	color:#FFF;
	border-right-color:#F00;
}
#ss
{
	background-color:#FFC;
	font-weight:200;
}
</style>
<?php
$username="root";
$password="";
$database="journal";
$con=mysql_connect('localhost',$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * from  citation ";
$result=mysql_query($query,$con);
unlink('d:/Citation.doc');
echo "<table width='100%'  border='0'><tr >
<td align='center' id='tr'>ID</td>
<td id='r'>Author1</td>
<td id='r'>Author2</td>
<td id='r'>Author3</td>
<td id='r'>Article Title</td>
<td id='r'>Journal</td>
<td id='r'>Conference</td>
<td id='r'>Publication</td>
<td id='r'>Volume No</td>
<td id='r'>Year</td>
<td id='r'>Pages</td>
<td id='tr1'>Month</td>
</tr>
";
$handle = fopen('d:/Citation.doc','w');
while($row=mysql_fetch_array($result))
{
	echo "<tr id='ss'><td>";
	echo $row[0]."</td>";
	echo "<td>";
	echo $row[2]."</td>";
	echo "<td>";
	echo $row[3]."</td>";
	echo "<td>";
	echo $row[4]."</td>";
	echo "<td>";
	echo $row[1]."</td>";
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
	
	//fwrite($handle,$row[0]);
	fwrite($handle,$row[2].'  ');
	fwrite($handle,$row[3].'  ');
	fwrite($handle,$row[4].' " ');
	fwrite($handle,$row[1].' " ');
	fwrite($handle,$row[5].'  ');
	fwrite($handle,$row[6].'  ');
	fwrite($handle,$row[7].'  ');
	
	fwrite($handle,'Volume:  ');
	fwrite($handle,$row[8].'  ');
	fwrite($handle,'Pages:  ');
	fwrite($handle,$row[9].'  ');
	fwrite($handle,$row[11].'  ');
	fwrite($handle,$row[10]."\n\n");
	

}
	fclose($handle);
echo "</table>";
mysql_close();
?>
<br/>
<table align="center" width="600" border="0">
  <tr>
    <td height="47"><a href="insert.php" target="_self"><input type="Button" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" value="INSERT"/></a></td>
    <td height="47"><a href="update.php" target="_self"><input type="Button" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" value="UPDATE"/></a></td>
        <td height="47"><a href="Delete.php" target="_self"><input type="Button" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" value="DELETE"/></a></td>
     <td height="47"><a href="sequery.php" target="_self"><input type="Button" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" value="SEARCH"/></a></td>
  </tr>
</table>  
</body>
</html>