<?php include("logo.php");
include("links.php");
if(!isset($c)){
	$c="";
}
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("Connection Error".mysqli_errno());
}
	$sql="select * from pdata";
 	$result2=mysqli_query($conn,$sql);
if(isset($_POST['b1'])){
	$b1=$_POST['s1'];
	$b2=$_POST['i1'];
	$b3=$_POST['d1'];
	$b4=$_POST['d2'];
	$str="insert into batch values('$b1','$b2','$b3','$b4')";
if(mysqli_query($conn,$str)){
	$c="Batch Created Succesfully";
	
}
}
if(isset($_POST['b2'])){
	$fname=ucfirst($_POST['i2']);
	$mname=ucfirst($_POST['i3']);
	$lname=ucfirst($_POST['i4']);
	$flname=$fname." ".$mname." ".$lname;
	$crs=$_POST['s2'];
	$btc=$_POST['s3'];
	$rgs=$_POST['i5'];
	$rl=$_POST['i6'];
	$prv=$_POST['s4'];
	$cty=$_POST['i7'];
	$dob=$_POST['d3'];
	$doj=$_POST['d4'];
	
	$m1=$_POST['i8'];
	$m2=$_POST['i9'];
	$m3=$_POST['i10'];
	$m4=$_POST['i11'];
	$m5=$_POST['i12'];
	$ttl=$_POST['i13'];
	$grd=$_POST['i14'];
	$strl="insert into pdata values('$flname','$prv','$rgs','$btc','$crs','$rl','$cty','$dob','$doj')";
	$stql="insert into mdata values('$rl','$flname','$m1','$m2','$m3','$m4','$m5','$ttl','$grd')";
	mysqli_query($conn,$stql);
	mysqli_query($conn,$strl);
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
<script>
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
        obj.open("GET","batchcal.php?q="+str,true);
        obj.send();
    }
}
	function calc(){
		 var a=Number(document.frm1.i8.value);
		var b=Number(document.frm1.i9.value);
		var c=Number(document.frm1.i10.value);
		var d=Number(document.frm1.i11.value);
		var e=Number(document.frm1.i12.value);
		var total=a+b+c+d+e;
		document.frm1.i13.value=total;
	}
</script>
<body >
	<form method="post" class="database" name="frm1">
		
		<div class="side">
			<a href="data.php">Personal Data</a>
			<a href="class.php">Marks Data</a>
			<a href="insert.php">Insert New Data</a>
		</div>
		<div class="main1">
			<fieldset class="ifeld">
				<legend>Create a new Batch</legend>
				<span class="text">Select a New Batch's Course :- <select name="s1">
												<option>Select a Course</option>
												<option>CCA</option>
												<option>CCPA</option>
												<option>CACPA</option>
												<option>CSE</option>
												<option>CBM</option>
												<option>CFA</option>
												<option>CET</option>
												<option>CPM</option>
												<option>GDP</option>
												</select></span>
				<span class="text">Name of The Batch :-<input type="text" name="i1"><br><br></span>
				<span class="text">Starts from : -<input type="date" name="d1"><br><br><br></span>
				<span class="text">Ends in : -<input type="date" name="d2"></span><?php echo $c ?>
				<button type="submit" value="classcreate" name="b1">Create a Batch</button>
			</fieldset>
			<fieldset class="ifeld">
			<legend>New Student Insertion Form</legend>
				<fieldset class="ifeld">
					<legend>Personal Information</legend>
					<span class="text">First Name: - <input type="text" name="i2"></span>
				  <span class="text">Middle Name: - <input type="text" name="i3"></span>
					<span class="text">Last Name: - <input type="text" name="i4"></span><br>
					<span class="text">Select a New Batch's Course :- <select name="s2" onchange="showUser(this.value)">
												<option>Select a Course</option>
												<option>CCA</option>
												<option>CCPA</option>
												<option>CACPA</option>
												<option>CSE</option>
												<option>CBM</option>
												<option>CFA</option>
												<option>CET</option>
												<option>CPM</option>
												<option>GDP</option>
												</select></span>
					<span class="text" id="opt"></span><br><br><br>
					<span class="text" id="reg" onchange="showerror(this.value)">Enter Registration Number: -<input type="text" name="i5"></span><span class="error" id="reger"></span><br><br>
					<span class="text">Enter Roll Number: -<input type="text" name="i6"></span><br><br>
					<span class="text">Select Privilege: -<select name="s4">
						<option>Select privilege</option>
						<option>admin</option>
						<option>user</option></select></span><br><br>
					<span class="text">City: - <input type="text" name="i7"></span><br><br>
					<span class="text">Date of Birth: -<input type="date" name="d3"></span><br><br>
					<span class="text">Date of Joining: -<input type="date" name="d4"></span>
				</fieldset>
				<fieldset class="ifeld">
				<legend>Marks & Grade</legend>
					<span class="text">Module-I: -<input type="text" name="i8"></span>
					<span class="text">Module-II: -<input type="text" name="i9"></span>
					<span class="text">Module-III: -<input type="text" name="i10"></span><br><br>
					<span class="text">Module-IV: -<input type="text" name="i11"></span>
					<span class="text">Module-V: -<input type="text" name="i12" onchange="calc()"></span><br><br>
					<span class="text">Total: -<input type="text" name="i13"></span><br><br>
					<span class="text">Grade -<input type="text" name="i14"></span>
					<button name="b2" type="submit">Insert New Record</button>
				</fieldset>
			</fieldset>
		</div>
</body>
</html>
	<?php include("footer.php");
?>