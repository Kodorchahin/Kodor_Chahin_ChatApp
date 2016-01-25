<?php

$dbcon = mysqli_connect("localhost", "root", "", "chat_app");

if(mysqli_connect_errno()) {
	echo "failed to connect: " . msyqli_connect_error();
}
?>
