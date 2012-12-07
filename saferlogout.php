<?php
include_once 'sessionAPI.php';
startLoginSystem();
safer_logout();
closeLoginSystem();
header('location: index.php');
?>