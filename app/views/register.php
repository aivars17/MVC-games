<!DOCTYPE html>
<html>
<head>
	<title><?=$data['title']?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/<?= CONFIG['site_path']; ?>/app/views/assets/css/style.css">
</head>
<body id="body" class="indexbody">
	<div class="container">
		<form action="/<?= CONFIG['site_path']; ?>/Auth/registerForm" method="POST" class="form-signin">
			<h2 class="form-signin-heading">
				<?php
				echo $data['header'];
				?>	
			</h2>
			<label for="inputEmail" class="sr-only">Nickname</label>
			<input type="text" id="form_nickname" name="form_nickname" class="form-control" placeholder="Nickname" required autofocus>
			<label for="inputEmail" class="sr-only">Name</label>
			<input type="text" id="form_name" name="form_name" class="form-control" placeholder="Name" required autofocus>
			<label for="inputEmail" class="sr-only">Surname</label>
			<input type="text" id="form_surname" name="form_surname" class="form-control" placeholder="Surname" required autofocus>
			<label for="inputEmail" class="sr-only">Username</label>
			<input type="text" id="form_age" name="form_age" class="form-control" placeholder="Age" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="form_password" name="form_password" class="form-control" placeholder="Password" required>
			<input onkeyup="checkpass()" type="password" id="form_password_re" name="form_password_re" class="form-control" placeholder="Re-password" required>
				<?php
				echo $data['error'];
				?>
			<div class="alert alert-warning" role="alert" id="error"></div>
			<button disabled id="reg" class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
			<a href="/<?= CONFIG['site_path']; ?>/Auth" class="btn btn-lg btn-primary btn-block">Login</a>
		</form>
	</div>
	<script src="/<?= CONFIG['site_path']; ?>/app/views/assets/js/regscript.js"></script>
</body>
</html>