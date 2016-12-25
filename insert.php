<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Form</title>
<script type="text/javascript"  src="validate.js"></script> 
<link href="Style/main.css"  rel="stylesheet"/>
</head>

<body>
<?
include"Menu.php";
?>
<table bgcolor="#FFFFFF" align="center" width="1020" border="1">
  <tr>
    <td height="54">journal entry FLASH</td>
  </tr>
  <tr>
    <td align="center" height="500">
    
    <div align="left" id="Entry">
    <form  style="margin-left:20px" name="myForm"  action="ins.php" method="POST"  onsubmit="return validateForm()"><br/>
    <b>
   
    
    						
    				
            Author Name
   						      &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
   	                    <input autocomplete="off" type="text"  id="vsp" name="Atitle"  />
    
    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
                        Author Name
   						      &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
   	                    <input autocomplete="off" type="text"  id="vsp" name="Auname2"  />
    
    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
                        Author Name
   						      &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
   	                    <input autocomplete="off" type="text"  id="vsp" name="Auname3"  />
    
    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
   	
   
   
			Article Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp; &nbsp;
            			
                  
    <input autocomplete="off" type="text" id="vsp" name="Auname"  /> 
    					
                        <br/>

		   Journal   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
  
           <input autocomplete="off" type="text" id="vsp" name="jname"  />
    	
        				
						
        				<br/>
           Conference  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; 
  
           <input autocomplete="off" type="text" id="vsp" name="Conference"  />
    	
        				
						
        				<br/>

           Publication
           
           				
			           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <input type="text" autocomplete="off"  style="margin-top:15px;" name="pname"  />
    					<br/>
			Volume No
            
            			&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" id="vsp" autocomplete="off"  name="vname"  />
     					<br/>
                       
            Pages
                       
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input  type="text" size="2" value="1" autocomplete="off" style="margin-top:15px;" name="pgname"  />
       <br/>
							 			Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" id="vsp" name="yname"  autocomplete="off" /><br/>
								 			Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" name="mname"  id="vsp" autocomplete="off" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/></b>
      <center><input type="submit" style="background-image:url(image/database.jpg); color:#FF0;" value="    INSERT    " /></center><br/>
	</form>
    </div>
    
    
    <div id="button"><p></p></div>
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>