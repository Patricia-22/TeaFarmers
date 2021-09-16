<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   

</body>
</html><?php include('userController.php') ?>
<!DOCTYPE html>
<html>
<head>
	<style> body {
            font-family: -apple-system, 
                BlinkMacSystemFont, sans-serif;
        }
      </style>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login</title>
    <h1>Tea Buying Clerk Login</h1>
</head>
<body>
<form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Forgotten Password? <a href="resetpass.php">Reset password</a>
  	</p>
  	<p>
  		Not signed up? <a href="registration.php">Sign up</a>
  	</p>
  </form>

</body>
</html>


