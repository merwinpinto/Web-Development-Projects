<?php 
$Saluation = $_POST["Salutation"];
$First_name = $_POST["First_name"];
$Last_name = $_POST["Last_name"];
$gender = $_POST["gender"];
$DOB = $_POST["dt"];
$Mobile_no = $_POST["num"];
$Email = $_POST["email"];
$Martial_Status = $_POST["s"];
$Address = $_POST["Address"];
$Education = $_POST["Education"];
$Experience = $_POST["Experience"];
$Skills = $_POST["Skills"];
$Image = $_POST["image"];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	
	<style>
		body {
			font-family: Arial;
			font-size: 20px;
			line-height: 1.5;
		}
		h1 {
			font-size: 30px;
			margin-bottom: 0;
		}
		
		h2 {
			font-size: 18px;
			margin-top: 0;
		}

		.text1{
			text-align:center;
			font-size:50px;
		}

		.box{
			background-color:lightcyan;
			padding: 50px;
			border-radius :10px;
			border: 3px Solid black;
			box-shadow: 0px 0px 6px #000;
			margin :50px 300px 100px 250px;			

		}

		img{
			float:right;
			width:200px;
			border-radius:10px;
			border:3px solid black;
		}

	</style>
</head>
<body>

	<div class="box">
		<img src=" <?php echo $Image; ?> ">
		<br>
		<p class="text1">My Resume</p>
		<br><br><br><br>
		<h1><?php echo $First_name." ".$Last_name; ?></h1>
		<h2><?php echo $Saluation; ?></h2>

		<h2>Personal Information</h2>
		<ul>
			<li>Gender: <?php echo $gender; ?></li>
			<li>Date of Birth: <?php echo $DOB; ?></li>
			<li>Mobile Number: <?php echo $Mobile_no; ?></li>
			<li>Email: <?php echo $Email; ?></li>
			<li>Marital Status: <?php echo $Martial_Status; ?></li>
			<li>Address: <?php echo $Address; ?></li>
		</ul>
		<br>
		<h2>Education</h2>
		<p><?php echo $Education; ?></p>
		<br>
		<h2>Experience</h2>
		<p><?php echo $Experience; ?></p>
		<br>
		<h2>Skills</h2>
		<p><?php echo $Skills; ?></p>
	</div>
		
</body>
</html>
