<?php
   session_start();
   $db=mysqli_connect("localhost","root","","blog");
   if(isset($_POST['login_btn']))
   {
   	  $username=mysql_real_escape_string($_POST['username']);
   	  $password=mysql_real_escape_string($_POST['password']);
      
      $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result=$db->query($sql);

      if($result->num_rows > 0)
      {
      	$_SESSION['username']=$username;
      	header("location:index.php");
      }
      else
      {
      	echo "<script type='text/javascript'>alert('Username or Password Is Incorrect')</script>";
        print"<script type='text/javascript'>window.location='login.php';</script>";
      }
   }
?>