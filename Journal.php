<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>JOURNAL ENTRY SYSTEM</title>
<link href="Style/citation.css" rel="stylesheet" />
<link href="Styles/Index.css" rel="stylesheet" />
</head>

<body id="bck" >
<?php 
include"Menu.php";
?>
<div style="margin-left:900px" align="justify" >
    <h3 style="color:#CCC">Welcome<?php 
	session_start();
	echo "<b style='color:#FFF;'>"."   ". $_SESSION['un']."</b>";
	 ?> <a href="Logout.php" target="_self">Logout</a></h3>
    </div>
<table align="center" width="1020" border="0">
  <tr>
    <td height="88">Journal Flash</td>
  </tr>
  <tr>
    <td height="250">
    <div id="MENU" align="center">
    <a href="insert.php" target="_self">
    <div id="rotate" align="center"><br /><br /><br />INSERT</div>
    </a>
    <a href="Delete.php" target="_self">
    <div id="rotate" align="center"><br /><br /><br />DELETE</div>
    </a>
    <a href="sequery.php" target="_self">
    <div id="rotate" align="center"><br /><br /><br />SEARCH</div></a>
    </div>
    </td>
  </tr>
</table>
</body>
</html>