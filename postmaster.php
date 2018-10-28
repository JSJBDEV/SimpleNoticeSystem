<?php
//welcome to the mystical land of php
$name = htmlspecialchars($_GET["name"]);
$ip = $_SERVER['REMOTE_ADDR'];
$action = htmlspecialchars($_GET["action"]);

//$connection = mysqli_connect("localhost","root","root");

//a user is a directory.

$connection = mysqli_connect("localhost","root","root","msgp");
		if ($connection->connect_error) 
		{
			die("Connection failed: " . $conneciton->connect_error);
		} 
		$poster = htmlspecialchars($_GET["poster"]);
		$content  =htmlspecialchars($_GET["content"]);
		$skey = htmlspecialchars($_GET["key"]);
		if($skey === "monmouthschoolgp")
		{
			$result = mysqli_query($connection,"INSERT INTO posts (poster,postContent) VALUES ('".$poster."','".$content."')");
			echo $result;
		}
		else{echo "ouch";}





?>