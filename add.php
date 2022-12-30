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
    
    $id = $_POST['id'];
    $u_name = $_POST['u_name'];
    $u_password = $_POST['u_password'];
    
    $sql = "Insert into user (id,u_name,u_type,u_password) values ('$id','$u_name','','$u_password')";
    if(!mysqli_query($conn,$sql))
    {
        echo 'Not Inserted';
    }
    header("refresh:1; url=signup.html");

?>