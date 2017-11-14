<!DOCTYPE html>
<html>
<head>
	<title>Dice game login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="/<?= CONFIG['site_path']; ?>/app/views/assets/css/style.css" rel="stylesheet">
</head>
<body id="body" class="indexbody">
	<div class="container">
		<form action="/<?= CONFIG['site_path']; ?>/Auth/login"  method="POST" class="form-signin">
			<h2 class="form-signin-heading">Login</h2>
			<?php
			echo $data['error'];
			?>
			<label for="inputNick" class="sr-only">Nickname</label>
			<input type="text"  name="nickname" class="form-control" placeholder="Nickname" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password"  name="password" class="form-control" placeholder="Password" required>
			<button  class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
			<a href="/<?= CONFIG['site_path']; ?>/Auth/register" class="btn btn-lg btn-primary btn-block">Register</a>
		</form>
	</div>
</body>
</html>