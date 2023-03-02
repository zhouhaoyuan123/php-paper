<?php
session_start();
if(isset($_SESSION["user"]) && isset($_SESSION["password"])){
    header("Location: " . "/paperuse-php/homepage.php");
}   
?>
<html>
<body>
	<form action="login.php" method = "post">
	<input type = "text" name = "user">
	<input type = "text" name = "password">
	<input type = "submit">
	</form>
</body>
</html>