?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if ($_POST['submit']) {
	include_once("connection.php");
	$username = ($_POST['username']);
	$password = ($_POST['password']);
	
	$sql = "SELECT user_id, username, password FROM users where username = '$username' and password = '$password'";
	
	$query = mysqli_query($dbcon, $sql);
	
	if ($query) {
		$row = mysqli_fetch_row($query);
		$id = $row[0];
		$db_username = $row[1];
		$db_password = $row[2];
	}
	if($username == $db_username && $password == $db_password){
		$_SESSION['username'] = $username;
		$_SESSION['user_id'] = $id;
		header('location: user.php');
	}
	else {
		echo "Incorrect username or password";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign In</title>
		<link rel = "stylesheet" href = "css/layout_style.css">
		<style type = 'text/css'>
		
		fieldset {
  font-size:12px;
  padding:10px;
  width:250px;
  line-height:2;
  background-color:#ffc066;
  }
</style>
  
	</head>
	<body style="background-color:#e2e7e9;">
	<center>
	<h1>Welcome to Chat App!</h1>
	<h2>The Test Chat App</h2>
		
		<div>
		<fieldset>
				<legend><h3>Sign In</h3></legend>
			<form method = "post" action = "index.php"> 
			<input type="text" required placeholder ="Enter Username" name = "username" /><br/>
			<input type="password" required placeholder ="Enter Password" name = "password" /><br/><br/>
			<input type="submit" name="submit" value="Log In" />
		</fieldset>
		</div>
	</center>
	</body>
</html>
	
