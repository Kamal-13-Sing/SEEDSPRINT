<?php
// Start the session
session_start();

// Destroy the entire session
session_destroy();
header("Location:customerformlogin.php");
?>