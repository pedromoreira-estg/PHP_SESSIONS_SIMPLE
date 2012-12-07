<?php
	// includes the login mini API Library
    include_once 'sessionAPI.php';
	// starts the Session - based Login System
	startLoginSystem();
	// is not logged 
	if (!($user = is_logged())) {
		// redirects to  index
		header('location: login.php');
	}
	// closes the Login System (this is not a logout)
	closeLoginSystem();
?>
<html>
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<h1>hello <?php echo $user ?></h1>
		<h3><a href="page1.php">GoTo **TOP SECRET** content</a></h3>
		<h3><a href="logout.php">Logout</a></h3>
		<h3><a href="saferlogout.php">Safer Logout</a></h3>
	</body>
</html>