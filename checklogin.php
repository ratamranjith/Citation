<?php
require "database.php";
$myusername=$_POST['un']; 
$mypassword=$_POST['pass']; 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM register WHERE Name='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['un'] = $myusername;


header("location:Journal.php");
}
else {
echo "<br/><h1>Wrong Username or Password</h1><br/>Try again";
$url = "Index.php";
header("Refresh: 1; url=".$url);
}
?>

