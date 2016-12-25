<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Form</title>
<script src="Scripts/Delete.js" type="text/javascript"></script>
</head>

<body>
<table align="center" width="1000" border="1">
  <tr>
    <td width="714" height="142">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" height="90"><form action="Delete1.php"  onsubmit=" return checkForm()" name="del" method="post" >
      <label for="textfield"> Enter Id NO:</label>
      <input type="text" name="delete"  />
      <input type="submit" name="Delete" id="button" value="Delete" />
    </form></td>
  </tr>
</table>
</body>
</html>