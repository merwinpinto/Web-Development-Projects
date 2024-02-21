<?php
$Date_of_attendance = $_POST['Date_of_attendance3'];
$Subject  = $_POST['sub3'];
$P_count3  = $_POST['P_count3'];
$P_rollno3 = $_POST['P_roll3'];
$A_count3  = $_POST['A_count3'];
$A_rollno3 = $_POST['A_roll3'];

$con = new mysqli("localhost", "root", "", "attendance");

if ($con->connect_error) 
{
  die("Failed to connect: " .$con->connect_error);
} 
else 
{
  $stmt = $con->prepare("INSERT INTO WTL_SYE(Date_inp,Subject_name,P_count,P_rollno,A_count,A_rollno) VALUES(?,?,?,?,?,?)");
  $stmt->bind_param("ssssss", $Date_of_attendance,$Subject,$P_count3,$P_rollno3,$A_count3,$A_rollno3);
  $stmt->execute();
}
header("Location: S2.html");
exit;
?>