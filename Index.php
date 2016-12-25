<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CITATION HOME</title>
<link href="Styles/Index.css"  rel="stylesheet"/>
</head>

<body  id="bck">
<?php include"menu.php";
?>
<center>

<hr id="line" />
<div id="index" >
		
				<div  id="login" >&nbsp;
					<form name="loginid" method="POST" action="checklogin.php" enctype="multipart/form-data">
        	
		            Login Name:&nbsp;&nbsp;&nbsp;<input type="text" autocomplete="off" name="un" maxlength="15" /><br/><br/>
            
        		    Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" /><br/><br/><br/>
            		&nbsp;
		            <input type="submit" value="Submit" name="Submit" style="background-image:url(image/login2.jpg)" onSubmit="return formValidation(); "/>
        		    &nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" style="background-image:url(image/login2.jpg)" />
            		</form>
				</div>
                <div  id="login1" >&nbsp;<H1>
                HOME</H1>
					
				</div>
</div>
		
				

</center>
</body>
</html>