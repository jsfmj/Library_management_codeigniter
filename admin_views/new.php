<!DOCTYPE html>  
<html>
<head>
<title>Registration form</title>
</head>
 
<body>
	<form method="post" action="<?= base_url() ?>index.php/admin/savedata">
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">First Name </td>
    <td width="329"><input type="text" name="first_name"/></td>
  </tr>
  <tr>
    <td>Last Name </td>
    <td><input type="text" name="last_name"/></td>
  </tr>
  <tr>
    <td>Email ID </td>
    <td><input type="email" name="email"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>
   <a href = 'display'>Click Here</a> to view the cookie.<br> 
      <a href = 'delete'>Click Here</a> to delete the cookie. 
	</form>
</body>
</html>
