<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php
$q=$_GET['q'];
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("Connection Error".mysqli_errno());
}
	$sql="select * from pdata";
 	$result2=mysqli_query($conn,$sql);
 	while($rows=mysqli_fetch_assoc($result2)){
 		if($rows['name']==$q){
 			echo "<table>
				 <tr>
					<th>Roll No.</th>
					<th>Name</th>
					<th>Registration</th>
					<th>Batch</th>
					<th>Course</th>
					<th>City</th>
					<th>Date of Birth</th>
					<th>Date of Joining</th>
					<th>Delete</th>
					<th>Update</th>
				</tr>";
			echo "<tr>";
			echo "<td>".$rows['sroll']."</td>";
			echo "<td>".$rows['name']."</td>";
			echo "<td>".$rows['registration']."</td>";
			echo "<td>".$rows['batch']."</td>";
			echo "<td>".$rows['course']."</td>";
			echo "<td>".$rows['address']."</td>";
			echo "<td>".$rows['bdate']."</td>";
			echo "<td>".$rows['jdate']."</td>";
			echo "<td><button id='delete' type='submit' name='b1' value='".$rows['name']."'>Delete</button>";
			echo "<td><button id='update' type='submit' name='b2' value='".$rows['name']."'>Update</button>";
			echo "</tr></table>";
 		}
 	}
?>