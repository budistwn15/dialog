<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN LOGIN </title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
	<?php
				error_reporting(0);
				if(isset($_GET["status"])){
					echo "
							<p class='notification'>Login failed, please try again.</p>
					";
				}
		?>
		<div class="modal" id="register">
			<div class="modal-register">
				<a href="#close" class="close-modal">&times</a>
				<p class="title">
					Register
				</p>
				<p class="subtitle">
						it`s very easy just one clik button register and you connected the programmer in the world.
				</p>
				<form action="module/auth/proses_daftar.php" method="post">
					<div class="form-group">
						<label for="">Name</label>
						<br>
						<input type="text" name="name">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<br>
						<input type="text" name="username">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<br>
						<input type="password" name="password">
					</div>
					<br>
					<div class="form-group">
						<button type="submit">Register</button>
					</div>
				</form>
			</div>
		</div>
	<div class="box-login">
		<div class="lead box-login-6">
			<p class="title">Welcome </p>

			<p class="subtitle">
				Login quickly like replying to your girlfriend's message.
			</p>
				<a href="#register">
			<button t class="btn-shadow icon-google">
			Register Now
			</button>
			</a>
			<ul class="help-link">
				<li><a href="">Terms of service</a></li>
				<li><a href="">Privacy policy</a></li>
			</ul>
		</div>
		<div class="form-login box-login-6">
			<br>
			<p class="title">Login </p>
			<p class="subtitle">Before you get started, you must login or register if you don't already have an account.</p>
			<br>

			<form action="module/auth/proses_login.php" method="POST">
				<div class="form-group">
					<label>Username</label>
					<br>
					<input type="text" name="username" id="username">
				</div>
				<br>
				<div class="form-group">
					<label>Password</label>
					<br>
					<input type="password" name="password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn-submit">Login</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>
