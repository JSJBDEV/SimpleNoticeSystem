<?php
//welcome to the mystical land of php
$name = htmlspecialchars($_GET["name"]);
$ip = $_SERVER['REMOTE_ADDR'];
$action = htmlspecialchars($_GET["action"]);

//$connection = mysqli_connect("localhost","root","root");

//a user is a directory.
if(!is_dir($ip))
	{
		mkdir($ip);
	}
else
{
	
}
//name
switch($action)
{
	case "view":
		$connection = mysqli_connect("localhost","root","root","msgp");
		if ($connection->connect_error) 
		{
			die("Connection failed: " . $conneciton->connect_error);
		} 
	
		$result = mysqli_query($connection,"SELECT * FROM posts ORDER BY postTime DESC");
		while($row = mysqli_fetch_assoc($result))
		{
			$row["postContent"] = str_replace("[","<",$row["postContent"]);
			$row["postContent"] = str_replace("]",">",$row["postContent"]);
			print "========|==#==|========<br><div id=".$row["postID"].">WRITER: ".$row["poster"]."	DATE: ".$row["postTime"]."<br>".$row["postContent"]."</div>";
		}
}





?>