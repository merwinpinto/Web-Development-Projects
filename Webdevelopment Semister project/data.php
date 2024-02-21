<?php
$Date_of_attendance = $_POST['Date_of_attendance1'];
$Subject  = $_POST['sub1'];
$P_count1  = $_POST['P_count1'];
$P_rollno1 = $_POST['P_roll1'];
$A_count1  = $_POST['A_count1'];
$A_rollno1 = $_POST['A_roll1'];

$con = new mysqli("localhost", "root", "", "attendance");

if ($con->connect_error) 
{
  die("Failed to connect: " .$con->connect_error);
} 
else 
{
  $stmt = $con->prepare("INSERT INTO WTL_SYA(Date_inp,Subject_name,P_count,P_rollno,A_count,A_rollno) VALUES(?,?,?,?,?,?)");
  $stmt->bind_param("ssssss", $Date_of_attendance,$Subject,$P_count1,$P_rollno1,$A_count1,$A_rollno1);
  $stmt->execute();
}
header("Location: S1.html");
exit;
?>