<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">	
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

	<main>
	
		<article id="login">
	
			<form action="login/doLogin" method="post" >
				<label for="textUsername">Username</label>
				<input type="text" id="textUsername" name="username"><br />
			
				<label for="textPassword">Password</label>
				<input type="password" id="textPassword" name="password">
		
				<br /><button type="submit" class="login" value="Login">Login<i class="icon-arrow-right icon-white iRight"></i></button>
			</form>
	
		</article>
	
	</main>

</body>

</html>