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
    
    $qid = $_POST['qid'];
    $question = $_POST['question'];
	$ans_id = $_POST['ans_id'];
   
   
    $sql="Insert into questions (qid,question,ans_id) values ('$qid','$question','$ans_id')";
    if(!mysqli_query($conn,$sql))
    {
        echo "not Inserted";
    }  
    header("refresh:1; url=insert_quiz.php");
    
?>