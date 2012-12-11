<?php
	// includes the login mini API Library
    include_once 'sessionAPI.php';
	// starts the Session - based Login System
	startLoginSystem();
	// is logged session
	if ($user = is_logged()) {
		// redirects to  index
		header("location: ".get_referer());
	}
	// closes the Login System (this is not a logout)
	closeLoginSystem();
?>
<html>
	<head>
		<style>
			form, input {
				font-size: 32px;
				border-radius : 10px;
				width : 200px;
			}
		</style>
	</head>
	<body>
		<form action='checklogin.php' method='POST'>
			username <input type="text" name='username'/>
			password <input type="password" name="pass" />
			<input type="submit" value="login" />
		</form>
	</body>
</html>