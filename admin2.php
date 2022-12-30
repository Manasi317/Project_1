<html>
<head>
	<title>admin</title>
    <style>
    table {
        margin:5px;
    }
    </style>
</head>
<body>

<div>

<form method="post" action="server.php" >
		
			id:<input type="text" name="id" value="">
		    <br>
			name<input type="text" name="u_name" value="">
            <br>
			type<input type="text" name="u_type" value="">
            <br>
			Password<input type="text" name="u_password" value="">
            <br>
            <input type="submit" value="Insert">
		   <br>
	</form>
</div>


<div>

<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Name</th>
		<th>Type</th>
        <th>Delete</th>
	</tr>
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
    $sql='Select * from user';
	$records = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>".$row['u_name']."</td>";
		echo "<td>".$row['u_type']."</td>";
		echo "<td><a href=delete.php?id=".$row['id'].">Delete</a></td>";
}

    ?>

</div>

<div style="margin:top:5px;">
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
    $sql="Select * from user";
    $records = mysqli_query($conn, $sql);
?>
<br><br>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Name</th>
		<th>Type</th>
        <th>Delete</th>
	</tr>
<?php
    while($row=mysqli_fetch_array($records))
    {
        echo "<tr><form action=update.php method=post>";
        echo "<td><input type=text name=u_name value='".$row['u_name']."'></td>";
        echo "<td><input type=text name=u_type value='".$row['u_type']."'></td>";
        echo "<input type=hidden name=id value='".$row['id']."'></td>";
        echo "<td><input type=submit>";
        echo "</form></tr>";
   }
?>
</div>
</body>
</html>
