<?php

//database setup

$servername = "localhost";
$username = "root";
$password = "";
$database = "chatroom";

// creating database connection

$conn = mysqli_connect($servername, $username, $password, $database);

// connection check

if(!$conn)
{
	die("Failed to connection". mysqli_connect_error());
}

else
{
echo "Start chat now";
}
?>