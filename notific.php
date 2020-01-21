<?php include("logo.php");
include("links.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Notifications</title>
</head>

<body class="notbody">
	<form method="post">
		<a href="appoint.php"><div class="rqewst"><center><i class="fas fa-handshake fa-4x"></i></center>
		 Meeting Appointment requests
		</div></a>
		<a href="datachange.php"><div class="rqewst">
		<i class="fas fa-user-cog fa-4x"></i><br>
			Students Data change requests
			</div></a>
		<a href="feed.php"><div class="rqewst">
		<i class="fas fa-comments fa-4x"></i><br>
			Feedback Forms Notifications
			</div></a>
	</form>
</body>
</html>
<?php include("footer.php");
?>