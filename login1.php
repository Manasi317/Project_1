<?php
session_start();
if ($_SESSION['u_type'] == "NU")
{

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="hackathon";
	$conn = mysqli_connect($servername, $username, $password,$dbname);
    if(!$conn)
    {
        echo "cant connect to database";
    }
?>
<html>
<head>
<title>QUIZ</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
<br><br>
<h1 style="font-size:35px; font-family:Cooper Black; text-align:center;">ROAD SAFETY QUIZ</h1>



<h2 class="text-center text-success">Welcome User</h2><br>



<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">
<div class="card">

<h2 class="text-center card-header">You have to select only one out of 3. Best of luck.</h2>

</div><br>

<form action="check.php" method="post">

<?php

for($i=1; $i<6; $i++){
$q = "Select * from questions where qid=$i";
$query = mysqli_query($conn,$q);

while($rows = mysqli_fetch_array($query)){
  ?> 

<div class="card">
<h4 class="card-header"><?php echo $rows['question']?></h4>  


<?php

$q = "Select * from answers where ans_id=$i";
$query = mysqli_query($conn,$q);

while($rows = mysqli_fetch_array($query)){ 

?>

<div class="card-body">
    <input type="radio" name="quizcheck[<?php echo $rows['ans_id']?>]" value="<?php echo $rows['aid'];?>">
    <?php echo $rows['answers']; ?>
</div>




<?php    
}
}
}

?>

<input type="submit" name="submit" value="submit" class="btn btn-primary m-auto d-block">

</form>
</div><br><br>

<div class="m-auto d-block">
<a href='our_hackathon.php' class="btn btn-success">LOGOUT</a>
</div>

</div>
</body>
</html>
<?php
}
else{
    header("location:our_hackathon.php"); // redirect to login page!
}
?>
