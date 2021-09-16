<?php include('userController.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Registration</title>
</head>
<body>
	<form method="post" action="registration.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Full Name</label>
  	  <input type="text" name="Name" value="<?php echo $Name; ?>">
  	</div>
  	
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="number" value="<?php echo $number; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already an admin ? <a href="login.php">Sign in</a>
  	</p>
  </form>


</body>
</html>