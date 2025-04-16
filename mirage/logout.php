<?php
require_once 'includes/config.php';

// Clear session
session_unset();
session_destroy();

// Clear remember me cookie if exists
if (isset($_COOKIE['user_email'])) {
    setcookie('user_email', '', time() - 3600, '/');
}

// Redirect to login page
header('Location: login.php');
exit;
?>
