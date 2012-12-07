<?php
include_once 'sessionAPI.php';
startLoginSystem();
logout();
closeLoginSystem();
header('location: index.php');
?>