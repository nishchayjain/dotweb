<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration');
$Aadhaar_No="276096726721";
$Name="";
$sql="SELECT * FROM inform where Aadhaar_No='$Aadhaar_No'";
$records=mysqli_query($con,$sql);
?>

<html>
<title>Information</title>
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

<div style="margin-left: auto; margin-right: auto; margin-topwidth: auto; width: 50%">
<table width="900" height="700" border="1" cellpadding="1" cellspacing="1" table bgcolor="#FFB3B3"  style="float:center">
<tr>
<th>Aadhaar_No</th>
<th>Name</th>
<th>Sex</th>
<th>Service Provider</th>
<th>Mobile No</th>
<th>Time Stamp</th>

</tr>
<?php

while($info=mysqli_fetch_assoc($records)){
	echo "<tr>";
    echo "<td>".$info['Aadhaar_No']."</td>";
	echo "<td>".$info['Name']."</td>";
	echo "<td>".$info['Sex']."</td>";
	echo "<td>".$info['Service_Provider']."</td>";
	echo "<td>".$info['Mobile_No']."</td>";
	echo "<td>".$info['TimeStamp']."</td>";
		
	echo "</tr>";
}
?>
</table>
</div>
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