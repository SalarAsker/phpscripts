<?php
// initiate a session
session_start();

// unset the session data
unset($_SESSION['userid']);

// destroy the session
session_destroy();

// redirect to the login
header('Location: login.php');

?>