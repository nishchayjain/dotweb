<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration');
$sql="SELECT * FROM inform";
$records=mysqli_query($con,$sql);
?>
<html>
<title>UIA DATABASE</title>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Aadhaar_No</th>
<th>Name</th>
<th>Sex</th>
<th>Service Provider</th>
<th>Mobile No</th>
</tr>
<?php
while($info=mysqli_fetch_assoc($records)){
	echo "<tr>";
    echo "<td>".$info['Aadhaar_No']."</td>";
	echo "<td>".$info['Name']."</td>";
	echo "<td>".$info['Sex']."</td>";
	echo "<td>".$info['Service_Provider']."</td>";
	echo "<td>".$info['Mobile_No']."</td>";
	
	
	
	echo "</tr>";
}
?>
</table>
</body>
</html>