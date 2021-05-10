<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>ASWMC Log in Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 align="center">Automated Solid Waste Management Characterization</h1>
	<h3 align="center">(ASWMC)</h3>
	<div class="header">
		<h2>Log in Page</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="input-group">
			
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="input-group" align="center">
			<button  type="submit" class="btn" name="login_btn">Login</button>
		</div>
		
	</form>
</body>
</html>