<?php
session_start(); // Start the session if not already started
if(isset($_SESSION['user_id'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: login.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>
