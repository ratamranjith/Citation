<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Form</title>
<script type="text/javascript"  src="validate.js"></script> 
<link href="Style/main.css"  rel="stylesheet"/>
</head>

<body>
<table bgcolor="#FFFFFF" align="center" width="1020" border="1">
  <tr>
    <td height="54">journal entry FLASH</td>
  </tr>
  <tr>
    <td align="center" height="500">
    
    <div align="left" id="Entry"><form  style="margin-left:20px" action="update1.php" name="myForm"  method="POST"  onsubmit="return validateForm()"><br/>
    <b>
   
    
    		ID NO
            			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	                    <input type="text"  id="vsp" name="AId" autocomplete="off" />											
    				
                    			
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
   			Article Title
   						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp; &nbsp;
                        
   	                    <input type="text"  id="vsp" name="Atitle" autocomplete="off"  />
    
    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
   	
   
   
			Author1 
            			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                        
                        &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="vsp" name="Auname"  autocomplete="off" /> 
    					
                        <br/>
           Author2 
            			
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                        
                        &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="vsp" name="Auname2"  autocomplete="off" /> 
    					
                        <br/>
		Author3
            			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                        
                        &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="vsp" name="Auname3"  autocomplete="off" /> 
    					
                        <br/>
		   Journal Name  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; 
  
           <input type="text" id="vsp" name="jname" autocomplete="off" />
    	
        				
						
        				<br/>

           Publication
           
           				
			           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <input type="text"  style="margin-top:15px;" name="pname" autocomplete="off" />
    					<br/>
			Volume No
            
            			&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" id="vsp"   name="vname"  autocomplete="off" />
     					<br/>
                       
            Pages
                       
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input  type="text" size="2" autocomplete="off" value="1"  style="margin-top:15px;" name="pgname"  />
       <br/>
							 			Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" autocomplete="off" id="vsp" name="yname"  /><br/>
								 			Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" autocomplete="off" name="mname"  id="vsp" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/></b>
      <center><input type="submit" style="background-image:url(image/database.jpg); color:#FF0;" value="    UPDATE    " /></center><br/>
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