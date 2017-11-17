<?php
  session_start();
  $db=mysqli_connect("localhost","root","","blog");
  if(isset($_POST['signup_btn']))
  {
  	 $username=mysql_real_escape_string($_POST['username']);
  	 $password=mysql_real_escape_string($_POST['password']);
  	 $cpassword=mysql_real_escape_string($_POST['cpassword']);
     
     $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
     $result=$db->query($sql);
     if ($result->num_rows > 0)
     {
         echo "<script type='text/javascript'>alert('$username is Alreday Created')</script>";
         print"<script type='text/javascript'>window.location='index.php';</script>";
     }

     else if($password==$cpassword)
     {
     	 $sql="INSERT INTO users(username,password)VALUES('$username','$password')";
     	 mysqli_query($db,$sql);
     	 echo "<script type='text/javascript'>alert('User Created Successfully')</script>";
       $_SESSION['username']=$username;
       print"<script type='text/javascript'>window.location='index.php';</script>";

     }
     
     else
     {
     	 echo "<script type='text/javascript'>alert('Password Didnt Matched')</script>";
       print"<script type='text/javascript'>window.location='signup.php';</script>";
     }
     
  }
?>