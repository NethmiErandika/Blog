<link href='css/adminlogin.css' rel='stylesheet' type='text/css'>
<br><br><br><br><br>
<form method="post" action="admpro.php" name="login_btn">
<div class="box">
<h1>Dashboard</h1>

<input type="username" name="username" value="username" onFocus="field_focus(this, 'username');" onblur="field_blur(this, 'username');" class="username" />
<br>
<input type="password" name="password" value="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="password" />
 
<button type="submit" name="login_btn" class="btn">Login</button> 
  
</div>

</form>

<script src="js/login.js" type="text/javascript"></script>