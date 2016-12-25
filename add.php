<?php 

require 'database.php';
$name  = $_POST['rname'];
$email  = $_POST['rmail'];
$pass  = $_POST['rpass2'];
$mobile  = $_POST['rmobile'];
$answer  = $_POST['rsecques'];

$query = "INSERT INTO `register`( `Id`,`name`, `password`, `email`, `mobile`, `answer`) VALUES ('','$name','$pass','$email','$mobile','$answer')";
//$query = "INSERT INTO register(`name`, `password`, `email`, `mobile`, `answer`) values('','$name','$email','$pass',$mobile,'$answer')";
if( $query = mysql_query($query))
	{
	
				echo "Inserted";
			header('Location: login.php');
			
			
}

else{
echo "You are not allowed to register here.Only Admin are allowed to Register ".mysql_error();
}
?>