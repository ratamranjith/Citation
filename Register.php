<html lang="en">
<head>
<title>User Registration</title>
<script src="Scripts/Registernew.js" type="text/javascript"></script>
<link href="Style/menu.css" rel="stylesheet">
<link rel="stylesheet" href="Styles/Index.css" /></head>
</head>
<body id="bck">
<?php

include"Menu.php";

?>
<div id="dreg" align="center">
<div id="register" >
<h2>User Registration</h2>
<form id="reg"  onSubmit="return validateForm()"  name="rreg" action="add.php"   method="POST">
   User Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type="text" name="rname" maxlength="15" /><br/><br/>
   New Password:&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;<INPUT type="password" name="rpass1" maxlength="15" /><br/><br/>
    Confirm Password:&nbsp;<INPUT type="password" name="rpass2" maxlength="15" /><br/><br/>
   E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type="text" name="rmail" maxlength="25" /><br/><br/>
    Mobile: +91&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type="text" name="rmobile" maxlength="10" /><br/><br/>
   
    		Security Question:&nbsp;<SELECT>
            
    			<option value="1" selected="selected">Your Native Place?</option>
                <option value="2">Name of Your Pet ?</option>
                <option value="3">Your Mobile Name?</option>
                              
            </SELECT>
    
    <br/>
    <br/>
  Answer:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="rsecques"  size="20px" /><br/><br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" style="background-image:url(image/login2.jpg); color:#FFF;font-weight:bolder;"  value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" style="background-image:url(image/login2.jpg);color:#FFF; font-weight:bolder;" value="Reset" />
    </form></div></div>
</body>
</html>