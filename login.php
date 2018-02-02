<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div style="background-color:#7bceeb;">
<!--[if gte mso 9]>
    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;">
    <v:fill type="frame" src="about3.jpg"color="#7bceeb" />
    <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
        <![endif]-->
 <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
     <td valign="top" align="left" background="about3.jpg" style="background-repeat:no-repeat; background-size:cover;">

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	
  </form>
  </td>
   </tr>
 </table>
 <!--[if gte mso 9]>
</v:textbox>
</v:rect>
<![endif]-->
</div>
</body>
</html>