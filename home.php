<?php
include 'lib/Database.php';

if (!isset($_SESSION['username'])) {
	echo $_SESSION['username'];
	header("Location: index.php");
} 
?>
<h1>Welcome to Dashboard</h1>
<a href="logout.php">logout</a>