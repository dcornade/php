<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("Connection Error".mysqli_errno());
}
	$sql="select * from mdata";
 	$result2=mysqli_query($conn,$sql);
if(isset($_POST['b1'])){
	$_SESSION['del']=$_POST['b1'];
	header("location:delete.php");
}
if(isset($_POST['b2'])){
	$_SESSION['upd']=$_POST['b2'];
	header("location:mudpt.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Database</title>
</head>
<link rel="stylesheet" href="assets/effect.css">
<link rel="stylesheet" href="assets/css/all.css">
<script type="text/javascript">
	   function showUser(str) {
    if (str == "") {
        document.getElementById("opt").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
          
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        }
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("opt").innerHTML = this.responseText;
            }
        };
        obj.open("GET","markscal.php?q="+str,true);
        obj.send();
    }
}
</script>
<body >
	<form method="post" class="database">
		
		<div class="side">
			<a href="data.php">Personal Data</a>
			<a href="class.php">Marks Data</a>
			<a href="insert.php">Insert New Data</a>
		</div>
		<div class="main1">
		<h1>Examination Results of all Individuals</h1>
		<div class="search" >Input a name to Search from the Database:- <input type="text" name="i99" onchange="showUser(this.value)"></div>
			<div id="opt"><table>
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
				</tr>
				<?php
					while($rows=mysqli_fetch_assoc($result2)){
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
				?>
			</table>
		</div>
	</form>
</body>
</html>
<?php include("footer.php");
?>