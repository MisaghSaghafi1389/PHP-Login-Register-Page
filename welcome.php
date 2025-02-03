<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo "Welcome, " . $_SESSION['username'] . "!";
?>
