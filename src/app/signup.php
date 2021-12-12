<?php

include("connection.php");

if(isset($_POST["fullName"]) && $_POST["fullName"] != ""){
	$fullName = $_POST["fullName"];
}else{
	die("OOPS! Try again ;)");
}
if(isset($_POST["email"]) && $_POST["email"] != ""){
	$email = $_POST["email"];
}else{
	die("OOPS! Try again ;)");
}


if(isset($_POST["password"]) && $_POST["password"] != ""){
	$password = hash("sha256", $_POST["password"]);
}else{
	die("OOPS! Try again ;)");
}


$mysql = $connection->prepare("INSERT INTO users(full_name, email, password) VALUES (?,?,?)");
$mysql->bind_param("sss", $full_name, $email, $password);
$mysql->execute();

$mysql->close();
$connection->close();
header("Location:index.php");

?>