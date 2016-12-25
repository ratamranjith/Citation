<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
a
{
	text-decoration:none;
	color:#F00;
}
</style>
<title>SEARCH FORM</title>
</head>

<body>
<table  align="center"width="1000" border="1">
  <tr>
  
  <h1 align="center">SEARCH FORM</h1>
    <td width="300" bgcolor="#FFFFCC" height="102"><div style="margin-left:900px" align="justify" >
    
    <h3 style="color:#CCC"><?php 
	
	session_start();
	echo " <b style='color:#CCC;'>"."   "."Welcome:". strtoupper($_SESSION['un']);
	 ?></h3>
     <h3 align="right"><a  href="Logout.php" target="_self">Logout</a></h3>
    </div></td>
  </tr>
  <tr>
    <td align="center" height="96">
    <h3 align="center ">SEARCH BY YEAR</h3>
    <form  id="form1" name="form1" method="POST" action="search.php">
      
        <p>
          <label for="textfield">From:</label>
          <input size="8"  type="text" maxlength="4" name="year1"  />
          <label for="textfield2">To:</label>
          <input type="text" size="8" maxlength="4" name="year2"  />
          <label for="textfield">Journal/Conference:</label>
          <input size="20" type="text" maxlength="30" name="Conf1"  />
         
        </p>
     
        <p>
          <input type="submit" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" name="submit"  value="Submit" />&nbsp;&nbsp;&nbsp;
          <input type="reset"  style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF"   value="Reset" />
          <br/>
          <br/>
        </p>
        
    </form>
    
        <h3 align="center ">OR</h3>
    <h3 align="center ">SEARCH BY AUTHOR NAME</h3>
  
    <form  id="form1" name="form2" method="POST" action="An.php" >
      
        <p>
          <label for="textfield">Author Name:</label>
          <input size="20" type="text" maxlength="30" name="Conf3"  />
          
        </p>
        <p>
          <input type="submit" style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF" name="submit"  value="Submit" />&nbsp;&nbsp;&nbsp;
          <input type="reset"  style="background-image:url(image/database.jpg) ; height:30px; width:80px; color:#FFF"   value="Reset" />
          <br/>
          <br/>
        </p>
        </form>
    </td>
    
  </tr>
</table>
</body>
</html>