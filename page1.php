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
		
	</head>
	<body>
		<img src="images/shakira1.jpeg"/><br/>
		<a href="page2.php">Go Back</a><br/>
	</body>
	
</html>