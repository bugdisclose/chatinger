<?php
$room = $_POST['room'];

   include 'db_connect.php';

// Check if room is already exist

$sql = "SELECT * FROM `rooms` WHERE roomname = '$room'";
$result = mysqli_query($conn, $sql);
if($result)
{
	if (mysqli_num_rows($result) > 0) 
	{
		$message = "Please choose the different room name this one is already claimed";
		echo '<script language="javascript">';
		echo 'alert("'.$message.'");';
		echo 'window.location="http://localhost/chatroom";';
		echo '</script>';
	}

	else
	{
		$sql = "INSERT INTO `rooms` (`roomname`, `stime`) VALUES ('$room', CURRENT_TIMESTAMP);";
		if (mysqli_query($conn, $sql)) 
		{
			$message = "Your room is ready for chat";
			echo '<script language="javascript">';
			echo 'alert("'.$message.'");';
			echo 'window.location="http://localhost/chatroom/rooms.php?roomname="{$room}"';
			echo '</script>';

		}
	}	
}

    else 

      {
		echo "mysql_error($conn)";
	  }	

?>