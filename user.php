<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_SESSION['user_id'])) {
	$id = $_SESSION['user_id'];
	$username = $_SESSION['username'];
}
else{
	header('Loaction: index.php');
	die();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel = "stylesheet" href = "css/message_style.css">
	</head>
	<body style="background-color:#e2e7e9;">
	<h2>Welcome, <?php echo $username; ?>.</h2>
    <div class="container" id="chatcontainer">
        <div class="chat" id="chatwindow"></div>
        <div class="form">
            <textarea name="message" id="messagebox" placeholder="Message:"></textarea>
        </div>
    </div>
    <script src="js/Connection.js"></script>
    <script src="js/app.js"></script>
	
	<form action = "logout.php">
	<input type = "submit" value = "log Out" />
	</body>
</html>
