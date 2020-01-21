<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("Error in Connecting".mysqli_query($conn));
}
$str1="select * from apoont";
$result2=mysqli_query($conn,$str1);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" class="database">
	
		<div class="side">
			<a href="notific.php">Back</a>
		</div>
	<div class="main1">
		<h1>Upcoming Appointments</h1>
			<table>
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Date</th>
					<th>Time</th>
				</tr>
				<?php
					while($rows=mysqli_fetch_assoc($result2)){
						echo "<tr>";
						echo "<td>".$rows['name']."</td>";
						echo "<td>".$rows['phone']."</td>";
						echo "<td>".$rows['email']."</td>";
						echo "<td>".$rows['date']."</td>";
						echo "<td>".$rows['time']."</td>";
						echo "</tr>";
					}
				?>
			</table>
		</form>
</body>
</html>