<?php
$user = $_POST["user"];
$password = $_POST["password"];
$host = "127.0.0.1";
$duser = "root";
$dpasswd = "";
$db = "php" ;
session_start();
if(isset($_SESSION["user"]) && isset($_SESSION["password"])){
    header("Location: " . "/paperuse-php/homepage.php");
}   
$conn=new mysqli($host,$duser,$dpasswd,$db);
$sql = "SELECT * FROM `usrs` WHERE name = '".$user."';";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($row["password"] == $password) {
        
        $_SESSION["user"] = $user;
        $_SESSION["password"] = $password;
        header("Location: " . "/paperuse-php/homepage.php");
        
    }
    else{
        die("Wrong password/username !");
    }
}
else {
    die("Wrong password/username !");
}


