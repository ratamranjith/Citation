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

