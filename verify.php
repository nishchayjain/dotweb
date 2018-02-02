<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  ul#menu{
  padding:20;
 }
ul#menu li{
   display: inline;;
}
ul#menu li a {
   background-color:grey;
   color:black;
   padding:10px 55px;
  text-decoration: none;
  border-radius:3px 3px 2px 2px;
}
ul#menu li a:hover{
 background-color:#3E2D4F;
}
</style>
  
</head>
<body>
<div style="background-color:#7bceeb;">
<!--[if gte mso 9]>
    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;">
    <v:fill type="frame" src="about7.jpg"color="#7bceeb" />
    <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
        <![endif]-->
 <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
     <td valign="top" align="left" background="about7.jpg" style="background-repeat:no-repeat; background-size:cover;">

<ul id="menu">
  <div class="header">
  	<h2>Verification</h2>
  </div>
	 
  <form method="post" action="verify.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Aadhar number</label>
  		<input type="number" name="Enter your Aadhar number" >
  	</div>
  	
  	 <li><br>
	 <br>
<a href="mohit.php">Submit</a></li>
</ul>
  	
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