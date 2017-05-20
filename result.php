<!DOCTYPE html>
<html>
<head>
	<title>
		Nss Result
	</title>
	 <meta charset="utf-8">
  <title>Table Demo</title>
  <style>
   table, th, td{
    border: 1px solid #333;
   }
  </style>
</head>
<body>
	<center>
	<img src="icon.png" style="width:200px;height:200px;"><br><br><br>
	<h1>NSS RESULT</h1>
	<?php
	$servername= "localhost";
	$username="root";
	$password="";
	$dbname="nss";
	//create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	//check connection
	if ($conn->connect_error) {
	die("No network!" . $conn->connect_error);
	}
	echo "Welcome ";
	$rollnum=$_POST["rollnum"];
	echo $rollnum."<br>";
	$sql ="SELECT events,project,mis,wintern FROM credits WHERE rollnum='$rollnum'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0 ){
		
		while($row=$result->fetch_assoc()){
			$events=$row["events"];
			$project=$row["project"];
			$mis=$row["mis"];
			$wintern=$row["wintern"];
			$total=$events+$project+$mis+$wintern;
		if(($total>=85)&&($mis>=10)&&($project>=45)){
			echo " <h1>PASSED</h1>";}else{echo "<h1>FAILED</h1>";}
		
		}
	?>
		<table>
	<tr>
	    <th><b></b></th>
	    <th><b>Credits</b></th>
	    <th><b>Min</b></th>
	</tr>
	<tr>
	    <td>Events:</td>
	    <td><?php echo $events;?></td>
	    <td>30</td>
	</tr>
	<tr>
	    <td>Project:</td>
	    <td><?php echo $project;?></td>
	    <td>45</td>
	</tr>
	<tr>
	    <td>Mis</td>
	    <td><?php echo $mis;?></td>
		<td>10</td>
	</tr>
	<?php
	if($wintern!=0)echo "<tr>
	    <td>wintern</td>
	    <td>".$wintern."</td>
	    <td>0</td>
	</tr>";?>
	</table>
		<?php
		echo"<b><h2>Total Credits: ".$total."</h2></b>";
		}else {
		echo "You are not an NSS volunteer"."<br>"."<br>"."<br>";
	}
		$conn->close();
		?>
		<small>85 is the total passing credit</small><br><br>
	
	<small>Any issue with the marks<br><a href="mailto:mritunjoydasae16b111@gmail.com" target="_top">Send Mail</a></small>

	</center>
</body>
</html>