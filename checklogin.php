<?php
include_once 'sessionAPI.php';
startLoginSystem();
// if variable 'username' has not been sent
if (!isset($_POST['username'])) {
	header('location: login.php');
}
// if variable 'pass' has not been sent
if (!isset($_POST['pass'])) {
	header('location: login.php');
}
// if login succeeds (user,pass)
if (login($_POST['username'],$_POST['pass'])) {
	// accesses the content
	header('location: index.php');
} else {
	// redirects to login
	header('location: login.php');
}

?>