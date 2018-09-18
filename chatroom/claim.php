<?php

$room = $_POST['room'];

   include 'db_connect.php';

// connection check

	if(!$conn)
		{
			die("Failed to connection". mysqli_connect_error());
		}

	else
		{

 			$sql = "SELECT * FROM `rooms` WHERE roomname = '$room'";
 			$result = mysqli_query($conn, $sql);

			if($result)
               {
			       if (mysqli_num_rows($result) > 0) 
		           {
						echo "Try some different room name";
		  			}
        
    				else
						{
							$sql = "INSERT INTO ROOMS (roomname, stime) VALUES ('$room', CURRENT_TIMESTAMP);";
							if (mysqli_query($conn, $sql))
							{
		
							$message = "Your room is ready for chat";
							echo '<script language="javascript">';
							echo 'alert("'.$message.'");';
							echo 'window.location="http://localhost/chatroom/rooms.php?roomname='. $room.'";';
							echo '</script>';
							}
						}	
				}	
		}

?>
