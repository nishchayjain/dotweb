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
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	<div class="input-group">
  	  <label>Enter the OTP</label>
	  <input type="number" name="OTP"><br>
	  <br>
  	  <button type="submit" class="btn" name="reg_user">OTP</button><br>
  	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
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