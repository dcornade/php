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
	$sql="select * from mdata";
 	$result2=mysqli_query($conn,$sql);
 	while($rows=mysqli_fetch_assoc($result2)){
 		if($rows['name']==$q){
 			echo "<table>
				<tr>
					<th>Roll No.</th>
					<th>Name</th>
					<th>Module-I</th>
					<th>Module-II</th>
					<th>Module-III</th>
					<th>Module-IV</th>
					<th>Module-V</th>
					<th>Total</th>
					<th>Grade</th>
					<th>Delete</th>
					<th>Update</th>
				</tr>";
			echo "<tr>";
						echo "<td>".$rows['sroll']."</td>";
						echo "<td>".$rows['name']."</td>";
						echo "<td>".$rows['mod1']."</td>";
						echo "<td>".$rows['mod2']."</td>";
						echo "<td>".$rows['mod3']."</td>";
						echo "<td>".$rows['mod4']."</td>";
						echo "<td>".$rows['mod5']."</td>";
						echo "<td>".$rows['total']."</td>";
						echo "<td>".$rows['grade']."</td>";
						echo "<td><button id='delete' type='submit' name='b1' value='".$rows['name']."'>Delete</button>";
						echo "<td><button id='update' type='submit' name='b2' value='".$rows['name']."'>Update</button>";
 		}
 	}
?>