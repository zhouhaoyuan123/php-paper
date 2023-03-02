<?php
session_start();
if(!isset($_SESSION["user"]) || !isset($_SESSION["password"])){
    header("Location: " . "/paperuse-php/login.php");
}   
?>
<html>
	<head><title>Homepage</title></head>
	<body>
		<div>
			<h1>Add Record</h1>
			<form action="add.php" method="post">
				<input type="number" name="record">
				<input type="submit">
			</form>
		</div>
		<div>
			<h1>View Records</h1>
			<form action="view.php" method="post">
				<input type="submit">
			</form>
		</div>
	</body>
</html>