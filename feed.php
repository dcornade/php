<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("Error in Connecting".mysqli_query($conn));
}
$str1="select * from fedback";
$result2=mysqli_query($conn,$str1);
if(isset($_POST['b1'])){
	$_SESSION['fed']=$_POST['b1'];
	header("location:fedshow.php");
}
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
		<h1>Given Feedbacks</h1>
			<table>
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Feedback Subject</th>
					<th>Short Description</th>
					<th>Long Description</th>
					<th>Show</th>
				</tr>
				<?php
					while($rows=mysqli_fetch_assoc($result2)){
						echo "<tr>";
						echo "<td>".$rows['name']."</td>";
						echo "<td>".$rows['phone']."</td>";
						echo "<td>".$rows['email']."</td>";
						echo "<td>".$rows['fs']."</td>";
						echo "<td>".$rows['sd']."</td>";
						echo "<td>".$rows['ld']."</td>";
						echo "<td><button type='submit' name='b1' value='".$rows['name']."'>Show</button></td>";
						echo "</tr>";
					}
				?>
			</table>
		</form>
</body>
</html>