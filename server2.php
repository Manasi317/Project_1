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
    
    $aid = $_POST['aid'];
    $answers = $_POST['answers'];
	$ans_id = $_POST['ans_id'];
   
   
    $sql="Insert into answers (aid,answers,ans_id) values ('$aid','$answers','$ans_id')";
    if(!mysqli_query($conn,$sql))
    {
        echo "not Inserted";
    }  
    header("refresh:1; url=insert_quiz.php");
    
?>