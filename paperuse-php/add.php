<?php
session_start();
if(!isset($_SESSION["user"]) || !isset($_SESSION["password"])){
    header("Location: " . "/paperuse-php/login.php");
}   
$ntime = date("Y/m/d");
$sql=sprintf("INSERT INTO `records` ('usr','date','value') VALUES ('%s','%s',%s);",$_SESSION["user"],$ntime,$_POST["record"]);
$sql2 = sprintf("SELECT * FROM `records` WHERE usr='%s',date='%s';",$_SESSION["user"],$ntime);
$sql3 = sprintf("UPDATE records SET value = '%s' WHERE usr = '%s' AND date = '%s';",$_POST["record"],$_SESSION["user"],$ntime);
$host = "127.0.0.1";
$duser = "root";
$dpasswd = "";
$db = "php" ;
$conn=new mysqli($host,$duser,$dpasswd,$db);
$res1 = $conn->query($sql2);
if($res1 && $res1->num_rows>0) {
    $conn->query($sql3);
}
else {
    $conn->query($sql);
}
echo "ok";