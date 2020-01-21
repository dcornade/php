<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="assets/effect.css">
<link rel="stylesheet" type="text/css" hresf="assets/css/all.css">
<script>
	function openbar(){
		document.getElementById("mysidebar").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
		document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}
	function closebar(){
		document.getElementById("mysidebar").style.width = "0"
		document.body.style.backgroundColor = "white";
	}
</script>
</head>
<body>
	<div id="mysidebar" class="sidebar">
	<a href="javascript:void(0)" class="fas fa-bars fa-lg clsbtn" onClick="closebar()"></a>
		<a href="<?php if($_SESSION['log']=="in"){echo "prfl.php";}else{echo "login.php";} ?>" class="<?php if($_SESSION['log']=="in"){echo "fas fa-user";}else{ echo "fas fa-door-closed";} ?>"><?php if($_SESSION['log']=="in"){echo "Your Profile";}else{echo "login page";}  ?></a>
		<?php if($_SESSION['log']=="in"){ if($_SESSION['oren']=="admin"){ echo '<a href="notific.php" class="fas fa-bell">Notifications</a>';}else{echo "<a href='mdata.php' class='fas fa-pencil-ruler'>Marks</a>";}} ?>
		<?php if($_SESSION['log']=="in"){ if($_SESSION['oren']=="admin"){ echo '<a href="data.php" class="fas fa-database">Manage Database';} }?>
		<?php if($_SESSION['log']=="in"){echo '<a href="logout.php" class="fas fa-door-open">Logout</a>';} ?>
		
	</div>
	<div class=lnk><ul><li><span class="fas fa-bars fa-lg sidenav" onClick="openbar()"></span></li><li><a href="index.php" class="fas fa-home fa-lg">Home</a></li><li><a href="news.php" class="fas fa-newspaper fa-lg">News</a></li>
	<li class="drpdwn">
		<a class="drpbtn fas fa-angle-down fa-lg">Courses</a>
		<div class="drp-cnt">
			<a href="soft.php">Software Courses</span></a><a href="multi.php">Multimedia Courses</a><a href="shortcrs.php">Short Courses</a><a href="sopken.php">Spoken English</a>
		</div></li><li><a href="feedback.php" class="fas fa-lg">Feedback</a></li><li class="<?php if($_SESSION['log']=="in"){echo "prfl";}else{echo "rqst";} ?> fas fa-lg"><a href="<?php if($_SESSION['log']=="in"){echo "prfl.php";}else{ echo "appointment.php"; } ?>" class="<?php if($_SESSION['log']=="in"){echo "fas fa-user";}else{echo "fa-angle-double-right";} ?>"><?php if($_SESSION['log']=="in"){echo " Hello Mr. ".$_SESSION['user'];}else{echo "Book An Appointment now!";} ?></a></li></ul></div>
</body>
</html>