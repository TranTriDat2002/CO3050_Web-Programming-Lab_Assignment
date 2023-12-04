<?php
session_start();

// Unset all of the session variables
session_unset();

// Destroy the session
session_destroy();

// Destroy cookie
setcookie('user_id', '', time() - 3600, '/');

// Redirect to the login page
header('Location: index.php?page=login');
exit();
