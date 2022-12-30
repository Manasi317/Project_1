<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="hackathon";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$dbname);
   	 if(!$conn)
  	  {
          echo "cant connect to database";
         }
	$sql="Delete from user where  id='$_GET[id]'";
	if( mysqli_query($conn, $sql))
		Header("refresh:1; url=m_delete.php");
	else
		echo "not deleted";

	
?>
