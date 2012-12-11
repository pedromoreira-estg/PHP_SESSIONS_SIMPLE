<?php
function startLoginSystem() {
	session_start();
}

function set_referer() {
	$_SESSION['from'] = $_SERVER['PHP_SELF'];
}

function get_referer() {
	if (!empty($_SESSION['from'])) 
		$GoTo =$_SESSION['from'];
	else {
		$GoTo = 'index.php';
	}
	return $GoTo;
}

function is_logged() {
	if (!isset($_SESSION['user'])) {
		$logged = false;
	} else if (empty($_SESSION['user'])){
		$logged = false; 
	} else {
		$logged = $_SESSION['user'];
	}
	
	return $logged;
}

function closeLoginSystem() {
	session_write_close();
}


function login($u,$p) {
	// should actually be verified against a DB os users
	if ($u == "teste" && $p == "vasco") {
		$_SESSION['user'] = $u;
		return true;
	} else {
		return false;
	}
}

function logout() {
	// clear the $_SESSION Array
	$_SESSION = array();
	// destroys session data
	session_unset();
	session_destroy();	
}

function safer_logout() {
	// deletes session info from the server
	logout();
	// and also resets the cookie from the browser 
	// preventing future use
	$name 	 = session_name();
	$expire  = strtotime('-1 year');
	$params	 = session_get_cookie_params();
	$path	 = $params['path'];
	$domain	 = $params['domain'];
	$secure  = $params['secure'];
	$httponly= $params['httponly'];
	setcookie($name,'',$expire,$path,$domain,$secure,$httponly);
}

?>