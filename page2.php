<?php
	// includes the login mini API Library
    include_once 'sessionAPI.php';
	// starts the Session - based Login System
	startLoginSystem();
	set_referer();
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
		
	</head>
	<body>
		<img src="images/shakira_back.jpeg"/><br/>
		<a href="page1.php">Go Back</a><br/>
		<a href="index.php">Go Home</a><br/>
	</body>
	
</html>