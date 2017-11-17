<link href='css/signuplogin.css' rel='stylesheet' type='text/css'>
<br><br><br><br><br>
<form method="post" action="signpro.php" name="signup_btn">
<div class="box">
<h1>Sign Up Form</h1>

<input type="username" name="username" value="username" onFocus="field_focus(this, 'username');" onblur="field_blur(this, 'username');" class="username" />

<input type="password" name="password" value="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="password" />

<input type="password" name="cpassword" value="password" onFocus="field_focus(this, 'password');" onblur="field_blur2(this, 'password');" class="password" />

<button type="submit" id="btn2" name="signup_btn">Submit</button>
</form>
<script src="js/signup.js" type="text/javascript"></script>