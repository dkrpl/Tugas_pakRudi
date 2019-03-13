<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">
</head>
<body>
	<center>
		<br><br><br><br><br><br><br><br><br>
<h2>Halaman Login</h2>
	<div class="container">
	<form action="<?php echo site_url('login/cek'); ?>" method="post">
		<div class="form-group">
			<label>Username</label>
			<input class="form-control" type="text" name="username">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="password" name="password">
		</div>
		<input class="btn btn-danger" type="submit" name="" value="LOGIN">
		
		
	</form>
</center>
</body>
</html>