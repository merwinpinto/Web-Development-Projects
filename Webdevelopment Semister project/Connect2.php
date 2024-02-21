<?php
   $username = $_POST['email'];
   $password = $_POST['password'];
   $con = new mysqli("localhost","root","","attendance");

   if($con->connect_error)
   {
    die("Failed to connect :".$con->connect_error);
   }
   else
   {
      if(!empty($password)) 
      {
         $stmt = $con -> prepare("UPDATE login SET password=? WHERE username=?");
         $stmt -> bind_param("ss",$password,$username);
         $stmt -> execute();
 
         if ($stmt->affected_rows > 0) 
         {
            header("Location: loginpg.html");
            exit;
         } 
      
         else 
         {
            echo "<h2>Failed to update password. Please try again later.</h2>";
         }
      }
      
      else 
      {
         echo "<h2>Password cannot be blank. Please try again.</h2>";
      }
   }
?>
