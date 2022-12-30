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
	$sql="Delete from questions where  qid='$_GET[qid]'";
	if( mysqli_query($conn, $sql))
		Header("refresh:1; url=edit_quiz.php");
	else
		echo "not deleted";

	
?>
