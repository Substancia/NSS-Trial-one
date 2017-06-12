<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="icon.png" />
	<title>Contact</title>
</head>
<body>
	<center>
	<img src="icon.png" style="width:200px;height:200px;"><br><br><br>
	<h1>Contacting NSS</h1><br>

	<?php
	
	$servername= "localhost";
	$username="id4729626_jane";
	$password="jane123";
	$dbname="id4729626_testdb";

	$conn = new mysqli($servername,$username,$password,$dbname);

	if ($conn->connect_error)
	{
		die("No network!" . $conn->connect_error);
	}

	$name=$_POST["text-680"];
	$email=$_POST["email-680"];
	$tel=$_POST["tel-630"];
	$message=$_POST["textarea-398"];
	$reach=$_POST["reach"];
	$monday=$_POST["mondaystat"];
	$tuesday=$_POST["tuesdaystat"];
	$wednesday=$_POST["wednesdaystat"];
	$thursday=$_POST["thursdaystat"];
	$friday=$_POST["fridaystat"];
	$saturday=$_POST["saturdaystat"];
	$sunday=$_POST["sundaystat"];
	$morning=$_POST["morningstat"];
	$afternoon=$_POST["afternoonstat"];

	echo "Sending...";
	$sql ="INSERT INTO reachdb (name,email,telephone,message,method,mondaystat,tuesdaystat,wednesdaystat,thursdaystat,fridaystat,saturdaystat,sundaystat,morningstat,afternoonstat) VALUES ('$name','$email','$tel','$message','$reach',monday,tuesday,wednesday,thursday,friday,saturday,sunday,morning,afternoon);";
	$result = $conn->query($sql);
	echo "Message sent successfully!";
	?>
	
	</center>
</body>
</html>
