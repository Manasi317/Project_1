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
    $sql="UPDATE user set u_name='$_POST[u_name]',u_type='$_POST[u_type]' where id='$_POST[id]'";
	
    if(mysqli_query($conn,$sql))
    {
        header("refresh:1; url=m_update.php");
    }
    else
        echo "No update";
    

?>