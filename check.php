<?php
/*session_start();
if(!isset($_SESSION['id'])){
    header('location:login.php');
}*/

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
    
    if(isset($_POST['submit'])){
        
        if(!empty($_POST['quizcheck'])){
            $count=count($_POST['quizcheck']);
            echo "Out of 5, you have selected ".$count." options";
            echo"<br>";
            $result=0;
            $i=1;
            $selected=$_POST['quizcheck'];
            
            $q = "Select * from questions";
            $query = mysqli_query($conn,$q);
            $i=1;
            while($rows = mysqli_fetch_array($query)){
                
                $checked=$rows['ans_id'] == $selected[$i];
                if($checked){
                    $result++;
                }
                $i++;
            }
            echo "<br>Your total score is".$result; 
        }
        
    }
?>