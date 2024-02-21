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
     $stmt = $con -> prepare("SELECT username,password FROM login WHERE username=?");
     $stmt -> bind_param("s",$username);
     $stmt -> execute();
     $stmt_result = $stmt -> get_result();
     if($stmt_result -> num_rows > 0)
     {
        $data = $stmt_result-> fetch_assoc();
        if($data['password'] == $password)
        {
            if ($username == 'test1@vupune.ac.in')
            {
               header("Location: S1.html");
               exit;
            } 
            
            elseif ($username == 'test2@vupune.ac.in') 
            {
               header("Location: S2.html");
               exit;
            }
        }

        else
        {
            echo "<h2> Invalid VU Email or password </h2>";
        }
     }
     else
     {
        echo "<h2> Invalid VU Email or password </h2>";
     }
   }
?>