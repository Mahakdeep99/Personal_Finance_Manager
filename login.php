<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

 	if($username=="mehak" && $password=="mehak")
	{
			header("Location: services.html");
	}
}
?>