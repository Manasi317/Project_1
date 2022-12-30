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
	$sql="Delete from tblsurvey where  ID='$_GET[ID]'";
	if( mysqli_query($conn, $sql))
		Header("refresh:1; url=editSur.php");
	else
		echo "not deleted";

	
?>
