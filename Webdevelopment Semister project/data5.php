<?php
$Date_of_attendance = $_POST['Date_of_attendance2'];
$Subject  = $_POST['sub2'];
$P_count2  = $_POST['P_count2'];
$P_rollno2 = $_POST['P_roll2'];
$A_count2  = $_POST['A_count2'];
$A_rollno2 = $_POST['A_roll2'];

$con = new mysqli("localhost", "root", "", "attendance");

if ($con->connect_error) 
{
  die("Failed to connect: " .$con->connect_error);
} 
else 
{
  $stmt = $con->prepare("INSERT INTO TOC_SYE(Date_inp,Subject_name,P_count,P_rollno,A_count,A_rollno) VALUES(?,?,?,?,?,?)");
  $stmt->bind_param("ssssss", $Date_of_attendance,$Subject,$P_count2,$P_rollno2,$A_count2,$A_rollno2);
  $stmt->execute();
}
header("Location: S2.html");
exit;
?>