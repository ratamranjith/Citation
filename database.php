<?php 
$host = 'localhost';
$password = '';
$name = 'root';
$error = 'Could not Connect to the database';
$database = 'journal';
if(mysql_connect($host,$name,$password) && mysql_select_db($database))
{
	echo "Connected";
}
else
{
echo mysql_error();
}
?>